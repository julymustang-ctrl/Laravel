<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaFile;
use App\Models\ContentHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MediaController extends Controller
{
    /**
     * Display media library
     */
    public function index(Request $request)
    {
        $query = MediaFile::with('uploader')
            ->orderBy('created_at', 'desc');
        
        // Filter by category
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
        
        // Search functionality
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('filename', 'like', "%{$search}%")
                  ->orWhere('alt_text', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
            });
        }
        
        // Filter by image dimensions
        if ($request->filled('width') || $request->filled('height')) {
            if ($request->filled('width')) {
                $query->where('width', $request->width);
            }
            if ($request->filled('height')) {
                $query->where('height', $request->height);
            }
        }
        
        $mediaFiles = $query->paginate(24);
        
        // Get available categories for filter
        $categories = MediaFile::distinct()->pluck('category')->filter()->sort();
        
        // Get common dimensions for filter
        $dimensions = MediaFile::select('width', 'height')
            ->distinct()
            ->whereNotNull('width')
            ->whereNotNull('height')
            ->orderBy('width')
            ->orderBy('height')
            ->get()
            ->map(function($item) {
                return "{$item->width}x{$item->height}";
            })
            ->unique();
        
        return view('admin.media.index', compact('mediaFiles', 'categories', 'dimensions'));
    }
    
    /**
     * Show upload form
     */
    public function create(Request $request)
    {
        $categories = MediaFile::distinct()->pluck('category')->filter()->sort();
        
        // Get target dimensions if specified (for replacement uploads)
        $targetWidth = $request->get('target_width');
        $targetHeight = $request->get('target_height');
        $context = $request->get('context'); // Where this image will be used
        
        return view('admin.media.create', compact('categories', 'targetWidth', 'targetHeight', 'context'));
    }
    
    /**
     * Handle file upload with dimension validation and auto-resize
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240', // 10MB max
            'alt_text.*' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:100',
            'target_width' => 'nullable|integer|min:1|max:5000',
            'target_height' => 'nullable|integer|min:1|max:5000',
            'auto_resize' => 'boolean',
            'maintain_aspect' => 'boolean'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $uploadedFiles = [];
        $errors = [];
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $index => $file) {
                try {
                    $result = $this->processFileUpload(
                        $file, 
                        $request->get('alt_text')[$index] ?? '',
                        $request->get('category', 'general'),
                        $request->get('target_width'),
                        $request->get('target_height'),
                        $request->boolean('auto_resize', true),
                        $request->boolean('maintain_aspect', true)
                    );
                    
                    $uploadedFiles[] = $result;
                    
                } catch (\Exception $e) {
                    $errors[] = "Failed to upload {$file->getClientOriginalName()}: {$e->getMessage()}";
                }
            }
        }
        
        $successCount = count($uploadedFiles);
        $errorCount = count($errors);
        
        if ($successCount > 0) {
            $message = "{$successCount} file(s) uploaded successfully.";
            if ($errorCount > 0) {
                $message .= " {$errorCount} file(s) failed to upload.";
            }
            
            $response = redirect()->route('admin.media.index')->with('success', $message);
            
            if ($errorCount > 0) {
                $response = $response->with('errors', $errors);
            }
            
            return $response;
        } else {
            return back()->withErrors($errors)->withInput();
        }
    }
    
    /**
     * Process individual file upload with dimension handling
     */
    private function processFileUpload($file, $altText, $category, $targetWidth, $targetHeight, $autoResize, $maintainAspect)
    {
        // Generate unique filename
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $filename = Str::slug(pathinfo($originalName, PATHINFO_FILENAME)) . '-' . time() . '.' . $extension;
        
        // Create image instance for manipulation
        $image = Image::make($file);
        $originalWidth = $image->width();
        $originalHeight = $image->height();
        
        // Apply dimension constraints if specified
        if ($targetWidth || $targetHeight) {
            if ($autoResize) {
                // Auto-resize to target dimensions
                if ($targetWidth && $targetHeight) {
                    if ($maintainAspect) {
                        // Resize with aspect ratio constraint, then crop if needed
                        $image->fit($targetWidth, $targetHeight);
                    } else {
                        // Resize exactly to target dimensions (may distort)
                        $image->resize($targetWidth, $targetHeight);
                    }
                } elseif ($targetWidth) {
                    // Resize to target width, maintain aspect ratio
                    $image->resize($targetWidth, null, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                } elseif ($targetHeight) {
                    // Resize to target height, maintain aspect ratio
                    $image->resize(null, $targetHeight, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
            } else {
                // Validate dimensions match target (strict mode)
                if ($targetWidth && $originalWidth !== $targetWidth) {
                    throw new \Exception("Image width ({$originalWidth}px) does not match required width ({$targetWidth}px). Enable auto-resize or upload a {$targetWidth}x{$targetHeight} image.");
                }
                if ($targetHeight && $originalHeight !== $targetHeight) {
                    throw new \Exception("Image height ({$originalHeight}px) does not match required height ({$targetHeight}px). Enable auto-resize or upload a {$targetWidth}x{$targetHeight} image.");
                }
            }
        }
        
        // Optimize image quality and size
        $image->encode($extension, 90); // 90% quality for good balance
        
        // Store the processed image
        $path = "media/{$category}/" . date('Y/m');
        $fullPath = $path . '/' . $filename;
        
        // Ensure directory exists
        Storage::disk('public')->makeDirectory($path);
        
        // Save the image
        Storage::disk('public')->put($fullPath, $image->stream());
        
        // Get final dimensions
        $finalWidth = $image->width();
        $finalHeight = $image->height();
        $fileSize = $image->filesize();
        
        // Create media file record
        $mediaFile = MediaFile::create([
            'filename' => $filename,
            'original_filename' => $originalName,
            'path' => $fullPath,
            'width' => $finalWidth,
            'height' => $finalHeight,
            'file_size' => $fileSize,
            'mime_type' => $image->mime(),
            'alt_text' => $altText ?: $this->generateAltText($originalName),
            'category' => $category,
            'metadata' => [
                'original_dimensions' => [
                    'width' => $originalWidth,
                    'height' => $originalHeight
                ],
                'processed' => [
                    'resized' => $autoResize && ($targetWidth || $targetHeight),
                    'target_width' => $targetWidth,
                    'target_height' => $targetHeight,
                    'maintain_aspect' => $maintainAspect
                ],
                'upload_context' => request()->get('context')
            ],
            'uploaded_by' => Auth::guard('admin')->id()
        ]);
        
        // Track upload in history
        ContentHistory::trackChange(
            $mediaFile,
            'created',
            null,
            $mediaFile->toArray(),
            "Media file uploaded: {$originalName}"
        );
        
        return $mediaFile;
    }
    
    /**
     * Generate alt text from filename
     */
    private function generateAltText($filename)
    {
        $name = pathinfo($filename, PATHINFO_FILENAME);
        return Str::title(str_replace(['-', '_'], ' ', $name));
    }
    
    /**
     * Show media file details
     */
    public function show(MediaFile $mediaFile)
    {
        $mediaFile->load('uploader');
        
        // Get usage information (where this image is used)
        $usage = $this->getMediaUsage($mediaFile);
        
        return view('admin.media.show', compact('mediaFile', 'usage'));
    }
    
    /**
     * Get media file usage across the site
     */
    private function getMediaUsage(MediaFile $mediaFile)
    {
        // This would scan content sections for references to this media file
        // Implementation depends on how media is referenced in content
        return [];
    }
    
    /**
     * Show edit form for media file
     */
    public function edit(MediaFile $mediaFile)
    {
        $categories = MediaFile::distinct()->pluck('category')->filter()->sort();
        
        return view('admin.media.edit', compact('mediaFile', 'categories'));
    }
    
    /**
     * Update media file metadata
     */
    public function update(Request $request, MediaFile $mediaFile)
    {
        $validator = Validator::make($request->all(), [
            'alt_text' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'metadata' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $oldData = $mediaFile->toArray();
        
        $mediaFile->update([
            'alt_text' => $request->alt_text,
            'category' => $request->category,
            'metadata' => array_merge($mediaFile->metadata ?? [], $request->metadata ?? [])
        ]);
        
        // Track update in history
        ContentHistory::trackChange(
            $mediaFile,
            'updated',
            $oldData,
            $mediaFile->fresh()->toArray(),
            'Media file metadata updated via admin panel'
        );
        
        return redirect()->route('admin.media.show', $mediaFile)
            ->with('success', 'Media file updated successfully.');
    }
    
    /**
     * Replace existing image with new upload
     */
    public function replace(Request $request, MediaFile $mediaFile)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'maintain_dimensions' => 'boolean',
            'backup_original' => 'boolean'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        try {
            $oldData = $mediaFile->toArray();
            
            // Backup original if requested
            if ($request->boolean('backup_original')) {
                $this->backupMediaFile($mediaFile);
            }
            
            // Process replacement
            $newFile = $request->file('file');
            $image = Image::make($newFile);
            
            // Maintain original dimensions if requested
            if ($request->boolean('maintain_dimensions', true)) {
                $image->fit($mediaFile->width, $mediaFile->height);
            }
            
            // Optimize and save
            $image->encode($newFile->getClientOriginalExtension(), 90);
            Storage::disk('public')->put($mediaFile->path, $image->stream());
            
            // Update metadata
            $mediaFile->update([
                'width' => $image->width(),
                'height' => $image->height(),
                'file_size' => $image->filesize(),
                'mime_type' => $image->mime(),
                'metadata' => array_merge($mediaFile->metadata ?? [], [
                    'replaced_at' => now()->toISOString(),
                    'original_backup' => $request->boolean('backup_original')
                ])
            ]);
            
            // Track replacement in history
            ContentHistory::trackChange(
                $mediaFile,
                'replaced',
                $oldData,
                $mediaFile->fresh()->toArray(),
                'Media file replaced with new upload'
            );
            
            return redirect()->route('admin.media.show', $mediaFile)
                ->with('success', 'Media file replaced successfully.');
                
        } catch (\Exception $e) {
            return back()->withErrors(['file' => 'Failed to replace media file: ' . $e->getMessage()]);
        }
    }
    
    /**
     * Backup media file before replacement
     */
    private function backupMediaFile(MediaFile $mediaFile)
    {
        $backupPath = 'media/backups/' . date('Y/m/d') . '/' . pathinfo($mediaFile->filename, PATHINFO_FILENAME) . '-' . time() . '.' . pathinfo($mediaFile->filename, PATHINFO_EXTENSION);
        
        Storage::disk('public')->copy($mediaFile->path, $backupPath);
        
        // Update metadata with backup info
        $metadata = $mediaFile->metadata ?? [];
        $metadata['backup_path'] = $backupPath;
        $mediaFile->update(['metadata' => $metadata]);
    }
    
    /**
     * Delete media file
     */
    public function destroy(MediaFile $mediaFile)
    {
        $admin = Auth::guard('admin')->user();
        
        // Check if file is in use
        $usage = $this->getMediaUsage($mediaFile);
        if (!empty($usage) && !$admin->isSuperAdmin()) {
            return back()->withErrors(['error' => 'Cannot delete media file that is currently in use. Only Super Admins can force delete.']);
        }
        
        try {
            // Track deletion in history
            ContentHistory::trackChange(
                $mediaFile,
                'deleted',
                $mediaFile->toArray(),
                null,
                'Media file deleted via admin panel'
            );
            
            // Delete physical file
            if (Storage::disk('public')->exists($mediaFile->path)) {
                Storage::disk('public')->delete($mediaFile->path);
            }
            
            $filename = $mediaFile->filename;
            $mediaFile->delete();
            
            return redirect()->route('admin.media.index')
                ->with('success', "Media file '{$filename}' deleted successfully.");
                
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Failed to delete media file: ' . $e->getMessage()]);
        }
    }
    
    /**
     * Bulk operations for media files
     */
    public function bulkAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'action' => 'required|in:delete,move_category,optimize',
            'selected' => 'required|array|min:1',
            'selected.*' => 'exists:media_files,id',
            'new_category' => 'required_if:action,move_category|string|max:100'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $admin = Auth::guard('admin')->user();
        $action = $request->action;
        $selectedIds = $request->selected;
        
        $mediaFiles = MediaFile::whereIn('id', $selectedIds)->get();
        $processedCount = 0;
        
        foreach ($mediaFiles as $mediaFile) {
            try {
                switch ($action) {
                    case 'move_category':
                        $oldData = $mediaFile->toArray();
                        $mediaFile->update(['category' => $request->new_category]);
                        ContentHistory::trackChange($mediaFile, 'updated', $oldData, $mediaFile->toArray(), "Bulk moved to category: {$request->new_category}");
                        $processedCount++;
                        break;
                        
                    case 'optimize':
                        $this->optimizeMediaFile($mediaFile);
                        $processedCount++;
                        break;
                        
                    case 'delete':
                        if ($admin->isSuperAdmin()) {
                            ContentHistory::trackChange($mediaFile, 'deleted', $mediaFile->toArray(), null, 'Bulk deleted via admin panel');
                            if (Storage::disk('public')->exists($mediaFile->path)) {
                                Storage::disk('public')->delete($mediaFile->path);
                            }
                            $mediaFile->delete();
                            $processedCount++;
                        }
                        break;
                }
            } catch (\Exception $e) {
                // Continue with other files if one fails
                continue;
            }
        }
        
        $actionPast = [
            'move_category' => 'moved',
            'optimize' => 'optimized',
            'delete' => 'deleted'
        ][$action];
        
        return redirect()->route('admin.media.index')
            ->with('success', "{$processedCount} media files {$actionPast} successfully.");
    }
    
    /**
     * Optimize media file (reduce file size while maintaining quality)
     */
    private function optimizeMediaFile(MediaFile $mediaFile)
    {
        if (!Storage::disk('public')->exists($mediaFile->path)) {
            throw new \Exception("Media file not found: {$mediaFile->path}");
        }
        
        $image = Image::make(Storage::disk('public')->path($mediaFile->path));
        $originalSize = $mediaFile->file_size;
        
        // Re-encode with optimized quality
        $extension = pathinfo($mediaFile->filename, PATHINFO_EXTENSION);
        $image->encode($extension, 85); // Slightly lower quality for optimization
        
        Storage::disk('public')->put($mediaFile->path, $image->stream());
        
        $newSize = $image->filesize();
        $savings = $originalSize - $newSize;
        
        // Update file size
        $mediaFile->update([
            'file_size' => $newSize,
            'metadata' => array_merge($mediaFile->metadata ?? [], [
                'optimized_at' => now()->toISOString(),
                'original_size' => $originalSize,
                'size_savings' => $savings
            ])
        ]);
    }
}
