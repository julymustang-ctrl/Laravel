@extends('admin.layouts.app')

@section('title', 'Media Library')
@section('page-title', 'Media Library')

@section('content')
<div class="page-header">
    <div style="display: flex; justify-content: between; align-items: center; margin-bottom: 20px;">
        <div>
            <h1 class="page-title">Media Library</h1>
            <p class="page-subtitle">Manage all uploaded images and media files</p>
        </div>
        <a href="{{ route('admin.media.create') }}" class="btn btn-primary">
            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
            </svg>
            Upload Media
        </a>
    </div>
    
    <!-- Filters and Search -->
    <div class="card" style="margin-bottom: 30px;">
        <div class="card-body" style="padding: 20px;">
            <form method="GET" action="{{ route('admin.media.index') }}" style="display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 16px; align-items: end;">
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Search</label>
                    <input type="text" name="search" class="form-control" placeholder="Search by filename or alt text..." value="{{ request('search') }}">
                </div>
                
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Category</label>
                    <select name="category" class="form-control">
                        <option value="">All Categories</option>
                        @foreach($categories as $category)
                            <option value="{{ $category }}" {{ request('category') === $category ? 'selected' : '' }}>{{ ucfirst($category) }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Dimensions</label>
                    <select name="dimensions" class="form-control">
                        <option value="">All Dimensions</option>
                        @foreach($dimensions as $dimension)
                            <option value="{{ $dimension }}" {{ request('dimensions') === $dimension ? 'selected' : '' }}>{{ $dimension }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div style="display: flex; gap: 8px;">
                    <button type="submit" class="btn btn-primary">Filter</button>
                    <a href="{{ route('admin.media.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Media Grid -->
<div class="card">
    <div class="card-header" style="display: flex; justify-content: between; align-items: center;">
        <h3 class="card-title">Media Files ({{ $mediaFiles->total() }})</h3>
        
        <!-- Bulk Actions -->
        <div style="display: flex; align-items: center; gap: 12px;">
            <select id="bulkAction" class="form-control" style="width: auto;">
                <option value="">Bulk Actions</option>
                <option value="move_category">Move to Category</option>
                <option value="optimize">Optimize</option>
                <option value="delete">Delete</option>
            </select>
            <button onclick="executeBulkAction()" class="btn btn-secondary btn-sm" disabled id="bulkActionBtn">Apply</button>
        </div>
    </div>
    
    @if($mediaFiles->count() > 0)
        <form id="bulkForm" method="POST" action="{{ route('admin.media.bulk-action') }}">
            @csrf
            <input type="hidden" name="action" id="bulkActionInput">
            
            <div style="padding: 24px;">
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 20px;">
                    @foreach($mediaFiles as $mediaFile)
                        <div class="media-item" style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: white; transition: all 0.2s ease;" 
                             onmouseover="this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.1)'" 
                             onmouseout="this.style.boxShadow='none'">
                            <div style="position: relative; height: 140px; display: flex; align-items: center; justify-content: center; background-color: #f8fafc;">
                                @if(in_array(pathinfo($mediaFile->filename, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                    <img src="{{ Storage::url($mediaFile->path) }}" 
                                         alt="{{ $mediaFile->alt_text }}" 
                                         style="max-width: 100%; max-height: 100%; object-fit: cover;">
                                @else
                                    <div style="text-align: center; color: #94a3b8;">
                                        <svg width="40" height="40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        <div style="font-size: 12px; margin-top: 8px;">{{ strtoupper(pathinfo($mediaFile->filename, PATHINFO_EXTENSION)) }}</div>
                                    </div>
                                @endif
                                
                                <input type="checkbox" name="selected[]" value="{{ $mediaFile->id }}" 
                                       class="media-checkbox" 
                                       onchange="updateBulkActions()"
                                       style="position: absolute; top: 8px; right: 8px; width: 18px; height: 18px;">
                            </div>
                            
                            <div style="padding: 12px;">
                                <div style="font-weight: 500; font-size: 14px; color: #1e293b; margin-bottom: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" 
                                     title="{{ $mediaFile->filename }}">
                                    {{ Str::limit($mediaFile->filename, 20) }}
                                </div>
                                <div style="font-size: 12px; color: #64748b; margin-bottom: 8px;">
                                    {{ $mediaFile->width }}×{{ $mediaFile->height }} • {{ number_format($mediaFile->file_size / 1024, 1) }}KB
                                </div>
                                <div style="display: flex; gap: 4px;">
                                    <a href="{{ route('admin.media.show', $mediaFile) }}" 
                                       class="btn btn-secondary btn-sm" 
                                       style="padding: 4px 8px; font-size: 12px;"
                                       title="View Details">
                                        <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.media.edit', $mediaFile) }}" 
                                       class="btn btn-secondary btn-sm" 
                                       style="padding: 4px 8px; font-size: 12px;"
                                       title="Edit">
                                        <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.media.destroy', $mediaFile) }}" 
                                          style="display: inline;" 
                                          onsubmit="return confirm('Are you sure you want to delete this media file?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-danger btn-sm" 
                                                style="padding: 4px 8px; font-size: 12px;"
                                                title="Delete">
                                            <svg width="12" height="12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
        
        <!-- Pagination -->
        <div style="padding: 20px 24px; border-top: 1px solid #e2e8f0;">
            {{ $mediaFiles->withQueryString()->links() }}
        </div>
    @else
        <div class="card-body" style="text-align: center; padding: 60px 24px;">
            <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 20px; color: #94a3b8;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <h3 style="color: #64748b; margin-bottom: 12px;">No media files found</h3>
            <p style="color: #94a3b8; margin-bottom: 20px;">Get started by uploading your first media file.</p>
            <a href="{{ route('admin.media.create') }}" class="btn btn-primary">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                Upload Media
            </a>
        </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
function updateBulkActions() {
    const checkboxes = document.querySelectorAll('.media-checkbox:checked');
    const bulkActionBtn = document.getElementById('bulkActionBtn');
    
    bulkActionBtn.disabled = checkboxes.length === 0;
}

function executeBulkAction() {
    const action = document.getElementById('bulkAction').value;
    const checkboxes = document.querySelectorAll('.media-checkbox:checked');
    
    if (!action) {
        alert('Please select an action');
        return;
    }
    
    if (checkboxes.length === 0) {
        alert('Please select at least one media file');
        return;
    }
    
    const actionText = {
        'move_category': 'move',
        'optimize': 'optimize',
        'delete': 'delete'
    }[action];
    
    if (action === 'move_category') {
        const category = prompt('Enter category name:');
        if (!category) return;
        
        document.getElementById('bulkForm').insertAdjacentHTML('beforeend', 
            '<input type="hidden" name="new_category" value="' + category + '">');
    }
    
    if (confirm(`Are you sure you want to ${actionText} ${checkboxes.length} selected media file(s)?`)) {
        document.getElementById('bulkActionInput').value = action;
        document.getElementById('bulkForm').submit();
    }
}
</script>
@endpush