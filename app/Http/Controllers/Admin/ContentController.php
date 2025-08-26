<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContentSection;
use App\Models\ContentHistory;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    /**
     * Display content management interface
     */
    public function index(Request $request)
    {
        $query = ContentSection::with('history')
            ->orderBy('page_context')
            ->orderBy('sort_order')
            ->orderBy('name');
        
        // Filter by page context if provided
        if ($request->filled('page')) {
            $query->where('page_context', $request->page);
        }
        
        // Filter by content type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }
        
        // Filter by published status
        if ($request->filled('status')) {
            $isPublished = $request->status === 'published';
            $query->where('is_published', $isPublished);
        }
        
        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('key', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        $contentSections = $query->paginate(20);
        
        // Get available pages and types for filters
        $pages = ContentSection::distinct()->pluck('page_context')->filter()->sort();
        $types = ContentSection::getTypes();
        
        return view('admin.content.index', compact('contentSections', 'pages', 'types'));
    }
    
    /**
     * Show content by page context (tab-based view)
     */
    public function byPage($pageContext = 'global')
    {
        $contentSections = ContentSection::where('page_context', $pageContext)
            ->orWhere(function($query) use ($pageContext) {
                if ($pageContext === 'global') {
                    $query->where('is_global', true);
                }
            })
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();
        
        // Get all available page contexts for navigation
        $availablePages = ContentSection::distinct()
            ->pluck('page_context')
            ->filter()
            ->sort()
            ->prepend('global');
        
        return view('admin.content.by-page', compact('contentSections', 'pageContext', 'availablePages'));
    }
    
    /**
     * Show form for creating new content section
     */
    public function create(Request $request)
    {
        $pageContext = $request->get('page_context', 'global');
        $pages = Page::orderBy('title')->get();
        $types = ContentSection::getTypes();
        
        return view('admin.content.create', compact('pageContext', 'pages', 'types'));
    }
    
    /**
     * Store new content section
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'key' => 'required|string|max:255|unique:content_sections,key',
            'type' => 'required|in:' . implode(',', ContentSection::getTypes()),
            'content' => 'required',
            'page_context' => 'nullable|string|max:100',
            'is_global' => 'boolean',
            'is_published' => 'boolean',
            'sort_order' => 'integer|min:0',
            'seo_data' => 'nullable|array',
            'data' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        // Generate key if not provided
        if (empty($request->key)) {
            $baseKey = Str::slug($request->name);
            $key = $baseKey;
            $counter = 1;
            
            while (ContentSection::where('key', $key)->exists()) {
                $key = $baseKey . '-' . $counter;
                $counter++;
            }
            
            $request->merge(['key' => $key]);
        }
        
        $contentSection = ContentSection::create([
            'name' => $request->name,
            'key' => $request->key,
            'type' => $request->type,
            'content' => $request->content,
            'data' => $request->data ?? [],
            'page_context' => $request->page_context,
            'is_global' => $request->boolean('is_global'),
            'is_published' => $request->boolean('is_published', true),
            'sort_order' => $request->sort_order ?? 0,
            'seo_data' => $request->seo_data ?? []
        ]);
        
        // Track creation in history
        ContentHistory::trackChange(
            $contentSection,
            'created',
            null,
            $contentSection->toArray(),
            'Content section created via admin panel'
        );
        
        return redirect()->route('admin.content.index')
            ->with('success', 'Content section created successfully.');
    }
    
    /**
     * Show content section details
     */
    public function show(ContentSection $contentSection)
    {
        $contentSection->load('history.adminUser');
        
        return view('admin.content.show', compact('contentSection'));
    }
    
    /**
     * Show form for editing content section
     */
    public function edit(ContentSection $contentSection)
    {
        $pages = Page::orderBy('title')->get();
        $types = ContentSection::getTypes();
        
        return view('admin.content.edit', compact('contentSection', 'pages', 'types'));
    }
    
    /**
     * Update content section
     */
    public function update(Request $request, ContentSection $contentSection)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'key' => 'required|string|max:255|unique:content_sections,key,' . $contentSection->id,
            'type' => 'required|in:' . implode(',', ContentSection::getTypes()),
            'content' => 'required',
            'page_context' => 'nullable|string|max:100',
            'is_global' => 'boolean',
            'is_published' => 'boolean',
            'sort_order' => 'integer|min:0',
            'seo_data' => 'nullable|array',
            'data' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        // Store old data for history tracking
        $oldData = $contentSection->toArray();
        
        // Update content section
        $contentSection->update([
            'name' => $request->name,
            'key' => $request->key,
            'type' => $request->type,
            'content' => $request->content,
            'data' => $request->data ?? [],
            'page_context' => $request->page_context,
            'is_global' => $request->boolean('is_global'),
            'is_published' => $request->boolean('is_published'),
            'sort_order' => $request->sort_order ?? 0,
            'seo_data' => $request->seo_data ?? []
        ]);
        
        // Track update in history
        ContentHistory::trackChange(
            $contentSection,
            'updated',
            $oldData,
            $contentSection->fresh()->toArray(),
            $request->get('reason', 'Content section updated via admin panel')
        );
        
        return redirect()->route('admin.content.index')
            ->with('success', 'Content section updated successfully.');
    }
    
    /**
     * Toggle publish status
     */
    public function togglePublish(ContentSection $contentSection)
    {
        $oldData = $contentSection->toArray();
        $contentSection->is_published = !$contentSection->is_published;
        $contentSection->save();
        
        $action = $contentSection->is_published ? 'published' : 'unpublished';
        
        // Track status change in history
        ContentHistory::trackChange(
            $contentSection,
            $action,
            $oldData,
            $contentSection->toArray(),
            "Content section {$action} via admin panel"
        );
        
        $message = $contentSection->is_published ? 
            'Content section published successfully.' : 
            'Content section unpublished successfully.';
        
        return response()->json([
            'success' => true,
            'message' => $message,
            'is_published' => $contentSection->is_published
        ]);
    }
    
    /**
     * Duplicate content section
     */
    public function duplicate(ContentSection $contentSection)
    {
        $newSection = $contentSection->replicate();
        $newSection->name = $contentSection->name . ' (Copy)';
        $newSection->key = $contentSection->key . '-copy-' . time();
        $newSection->is_published = false; // Always create duplicates as drafts
        $newSection->save();
        
        // Track creation in history
        ContentHistory::trackChange(
            $newSection,
            'created',
            null,
            $newSection->toArray(),
            "Duplicated from content section: {$contentSection->name}"
        );
        
        return redirect()->route('admin.content.edit', $newSection)
            ->with('success', 'Content section duplicated successfully. Please review and publish when ready.');
    }
    
    /**
     * Restore content from history
     */
    public function restore(ContentSection $contentSection, ContentHistory $history)
    {
        if ($history->contentable_id !== $contentSection->id || 
            $history->contentable_type !== ContentSection::class) {
            abort(404);
        }
        
        $history->restore();
        
        return redirect()->route('admin.content.show', $contentSection)
            ->with('success', 'Content section restored from history successfully.');
    }
    
    /**
     * Delete content section
     */
    public function destroy(ContentSection $contentSection)
    {
        $admin = Auth::guard('admin')->user();
        
        // Only super admins can delete content sections
        if (!$admin->isSuperAdmin()) {
            abort(403, 'Only Super Admins can delete content sections.');
        }
        
        // Store data for history before deletion
        $oldData = $contentSection->toArray();
        
        // Track deletion in history
        ContentHistory::trackChange(
            $contentSection,
            'deleted',
            $oldData,
            null,
            'Content section deleted via admin panel'
        );
        
        $name = $contentSection->name;
        $contentSection->delete();
        
        return redirect()->route('admin.content.index')
            ->with('success', "Content section '{$name}' deleted successfully.");
    }
    
    /**
     * Bulk operations
     */
    public function bulkAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action' => 'required|in:publish,unpublish,delete',
            'selected' => 'required|array|min:1',
            'selected.*' => 'exists:content_sections,id'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $admin = Auth::guard('admin')->user();
        $action = $request->action;
        $selectedIds = $request->selected;
        
        $contentSections = ContentSection::whereIn('id', $selectedIds)->get();
        $processedCount = 0;
        
        foreach ($contentSections as $contentSection) {
            $oldData = $contentSection->toArray();
            
            switch ($action) {
                case 'publish':
                    $contentSection->is_published = true;
                    $contentSection->save();
                    ContentHistory::trackChange($contentSection, 'published', $oldData, $contentSection->toArray(), 'Bulk published via admin panel');
                    $processedCount++;
                    break;
                    
                case 'unpublish':
                    $contentSection->is_published = false;
                    $contentSection->save();
                    ContentHistory::trackChange($contentSection, 'unpublished', $oldData, $contentSection->toArray(), 'Bulk unpublished via admin panel');
                    $processedCount++;
                    break;
                    
                case 'delete':
                    if ($admin->isSuperAdmin()) {
                        ContentHistory::trackChange($contentSection, 'deleted', $oldData, null, 'Bulk deleted via admin panel');
                        $contentSection->delete();
                        $processedCount++;
                    }
                    break;
            }
        }
        
        $actionPast = [
            'publish' => 'published',
            'unpublish' => 'unpublished', 
            'delete' => 'deleted'
        ][$action];
        
        return redirect()->route('admin.content.index')
            ->with('success', "{$processedCount} content sections {$actionPast} successfully.");
    }
}
