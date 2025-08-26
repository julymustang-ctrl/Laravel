@extends('admin.layouts.app')

@section('title', 'Upload Media')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload Media</h1>
        <a href="{{ route('admin.media.index') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Media Library
        </a>
    </div>

    <!-- Upload Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Upload New Files</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.media.store') }}" method="POST" enctype="multipart/form-data" id="uploadForm">
                @csrf
                
                <!-- Target Dimensions (if specified) -->
                @if(request('target_width') || request('target_height'))
                <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle"></i> Dimension Requirements</h6>
                    <p class="mb-0">
                        This upload is for images with dimensions: 
                        <strong>{{ request('target_width', 'Any') }}px × {{ request('target_height', 'Any') }}px</strong>
                    </p>
                    @if(request('context'))
                    <small class="text-muted">Context: {{ request('context') }}</small>
                    @endif
                </div>
                @endif
                
                <!-- Category -->
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="general">General</option>
                        @foreach($categories as $category)
                            @if($category !== 'general')
                            <option value="{{ $category }}">{{ ucfirst($category) }}</option>
                            @endif
                        @endforeach
                        <option value="new">+ New Category</option>
                    </select>
                </div>
                
                <div class="form-group" id="newCategoryGroup" style="display: none;">
                    <label for="new_category">New Category Name</label>
                    <input type="text" name="new_category" id="new_category" class="form-control" placeholder="Enter new category name">
                </div>
                
                <!-- Files -->
                <div class="form-group">
                    <label for="files">Select Files <span class="text-danger">*</span></label>
                    <input type="file" name="files[]" id="files" class="form-control-file" multiple accept="image/*">
                    <small class="form-text text-muted">Supported formats: JPEG, PNG, GIF, SVG, WebP. Max 10MB per file.</small>
                </div>
                
                <!-- Auto Resize -->
                <div class="form-group form-check">
                    <input type="checkbox" name="auto_resize" id="auto_resize" class="form-check-input" value="1" checked>
                    <label for="auto_resize" class="form-check-label">Auto-resize images to match target dimensions</label>
                </div>
                
                <!-- Maintain Aspect Ratio -->
                <div class="form-group form-check">
                    <input type="checkbox" name="maintain_aspect" id="maintain_aspect" class="form-check-input" value="1" checked>
                    <label for="maintain_aspect" class="form-check-label">Maintain aspect ratio when resizing</label>
                </div>
                
                <!-- Hidden Fields for Target Dimensions -->
                @if(request('target_width'))
                <input type="hidden" name="target_width" value="{{ request('target_width') }}">
                @endif
                
                @if(request('target_height'))
                <input type="hidden" name="target_height" value="{{ request('target_height') }}">
                @endif
                
                @if(request('context'))
                <input type="hidden" name="context" value="{{ request('context') }}">
                @endif
                
                <!-- Submit -->
                <button type="submit" class="btn btn-primary" id="uploadBtn">
                    <i class="fas fa-upload"></i> Upload Files
                </button>
            </form>
        </div>
    </div>
    
    <!-- Batch Upload Instructions -->
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Batch Upload Instructions</h6>
        </div>
        <div class="card-body">
            <ul>
                <li>Select multiple files by holding Ctrl (Windows) or Cmd (Mac) while clicking</li>
                <li>For best results, upload images with similar dimensions together</li>
                <li>Auto-resize will adjust images to match target dimensions while maintaining quality</li>
                <li>Organize files with categories for easier management</li>
            </ul>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle category selection
    const categorySelect = document.getElementById('category');
    const newCategoryGroup = document.getElementById('newCategoryGroup');
    
    categorySelect.addEventListener('change', function() {
        if (this.value === 'new') {
            newCategoryGroup.style.display = 'block';
            document.getElementById('new_category').required = true;
        } else {
            newCategoryGroup.style.display = 'none';
            document.getElementById('new_category').required = false;
        }
    });
    
    // Handle form submission
    const uploadForm = document.getElementById('uploadForm');
    const uploadBtn = document.getElementById('uploadBtn');
    
    uploadForm.addEventListener('submit', function() {
        uploadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
        uploadBtn.disabled = true;
    });
});
</script>
@endsection