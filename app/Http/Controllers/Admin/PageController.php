<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ContentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display page management interface
     */
    public function index(Request $request)
    {
        $query = Page::orderBy('title');
        
        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('meta_description', 'like', "%{$search}%");
            });
        }
        
        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }
        
        $pages = $query->paginate(20);
        
        return view('admin.pages.index', compact('pages'));
    }
    
    /**
     * Show form for creating new page
     */
    public function create()
    {
        return view('admin.pages.create');
    }
    
    /**
     * Store new page
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'canonical_url' => 'nullable|url|max:500',
            'is_active' => 'boolean',
            'in_sitemap' => 'boolean',
            'sitemap_priority' => 'numeric|between:0,1',
            'sitemap_frequency' => 'in:always,hourly,daily,weekly,monthly,yearly,never',
            'open_graph' => 'nullable|array',
            'twitter_card' => 'nullable|array',
            'schema_markup' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        // Generate slug if not provided
        $slug = $request->slug ?: Str::slug($request->title);
        
        // Ensure slug is unique
        $originalSlug = $slug;
        $counter = 1;
        while (Page::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }
        
        $page = Page::create([
            'title' => $request->title,
            'slug' => $slug,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical_url' => $request->canonical_url,
            'is_active' => $request->boolean('is_active', true),
            'in_sitemap' => $request->boolean('in_sitemap', true),
            'sitemap_priority' => $request->sitemap_priority ?? 0.5,
            'sitemap_frequency' => $request->sitemap_frequency ?? 'weekly',
            'open_graph' => $request->open_graph ?? [],
            'twitter_card' => $request->twitter_card ?? [],
            'schema_markup' => $request->schema_markup ?? []
        ]);
        
        // Track creation in history
        ContentHistory::trackChange(
            $page,
            'created',
            null,
            $page->toArray(),
            'Page created via admin panel'
        );
        
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully.');
    }
    
    /**
     * Show page details
     */
    public function show(Page $page)
    {
        return view('admin.pages.show', compact('page'));
    }
    
    /**
     * Show form for editing page
     */
    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }
    
    /**
     * Update page
     */
    public function update(Request $request, Page $page)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:pages,slug,' . $page->id,
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'canonical_url' => 'nullable|url|max:500',
            'is_active' => 'boolean',
            'in_sitemap' => 'boolean',
            'sitemap_priority' => 'numeric|between:0,1',
            'sitemap_frequency' => 'in:always,hourly,daily,weekly,monthly,yearly,never',
            'open_graph' => 'nullable|array',
            'twitter_card' => 'nullable|array',
            'schema_markup' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $oldData = $page->toArray();
        
        // Generate slug if not provided
        $slug = $request->slug ?: Str::slug($request->title);
        
        // Ensure slug is unique (excluding current page)
        if ($slug !== $page->slug) {
            $originalSlug = $slug;
            $counter = 1;
            while (Page::where('slug', $slug)->where('id', '!=', $page->id)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
        }
        
        $page->update([
            'title' => $request->title,
            'slug' => $slug,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'canonical_url' => $request->canonical_url,
            'is_active' => $request->boolean('is_active'),
            'in_sitemap' => $request->boolean('in_sitemap'),
            'sitemap_priority' => $request->sitemap_priority ?? 0.5,
            'sitemap_frequency' => $request->sitemap_frequency ?? 'weekly',
            'open_graph' => $request->open_graph ?? [],
            'twitter_card' => $request->twitter_card ?? [],
            'schema_markup' => $request->schema_markup ?? []
        ]);
        
        // Track update in history
        ContentHistory::trackChange(
            $page,
            'updated',
            $oldData,
            $page->fresh()->toArray(),
            'Page updated via admin panel'
        );
        
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully.');
    }
    
    /**
     * Delete page
     */
    public function destroy(Page $page)
    {
        $admin = Auth::guard('admin')->user();
        
        // Only super admins can delete pages
        if (!$admin->isSuperAdmin()) {
            abort(403, 'Only Super Admins can delete pages.');
        }
        
        // Track deletion in history
        ContentHistory::trackChange(
            $page,
            'deleted',
            $page->toArray(),
            null,
            'Page deleted via admin panel'
        );
        
        $title = $page->title;
        $page->delete();
        
        return redirect()->route('admin.pages.index')
            ->with('success', "Page '{$title}' deleted successfully.");
    }
}