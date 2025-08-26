@extends('admin.layouts.app')

@section('title', 'Edit Media - ' . $mediaFile->filename)

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Media</h1>
        <div>
            <a href="{{ route('admin.media.show', $mediaFile) }}" class="btn btn-sm btn-secondary shadow-sm mr-2">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Details
            </a>
            <a href="{{ route('admin.media.index') }}" class="btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Media Library
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Edit Form -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Metadata</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.media.update', $mediaFile) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <!-- Alt Text -->
                        <div class="form-group">
                            <label for="alt_text">Alternative Text <span class="text-danger">*</span></label>
                            <input type="text" 
                                   name="alt_text" 
                                   id="alt_text" 
                                   class="form-control @error('alt_text') is-invalid @enderror" 
                                   value="{{ old('alt_text', $mediaFile->alt_text) }}" 
                                   required>
                            @error('alt_text')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="form-text text-muted">Descriptive text for accessibility and SEO.</small>
                        </div>
                        
                        <!-- Category -->
                        <div class="form-group">
                            <label for="category">Category <span class="text-danger">*</span></label>
                            <select name="category" id="category" class="form-control @error('category') is-invalid @enderror" required>
                                <option value="general" {{ old('category', $mediaFile->category) == 'general' ? 'selected' : '' }}>General</option>
                                @foreach($categories as $category)
                                    @if($category !== 'general')
                                    <option value="{{ $category }}" {{ old('category', $mediaFile->category) == $category ? 'selected' : '' }}>
                                        {{ ucfirst($category) }}
                                    </option>
                                    @endif
                                @endforeach
                                <option value="new">+ New Category</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group" id="newCategoryGroup" style="display: none;">
                            <label for="new_category">New Category Name</label>
                            <input type="text" name="new_category" id="new_category" class="form-control" placeholder="Enter new category name">
                        </div>
                        
                        <!-- Custom Metadata -->
                        <div class="form-group">
                            <label for="custom_metadata">Custom Metadata</label>
                            <textarea name="metadata[custom]" 
                                      id="custom_metadata" 
                                      class="form-control" 
                                      rows="3" 
                                      placeholder="Enter custom metadata as key-value pairs">{{ old('metadata.custom', $mediaFile->metadata['custom'] ?? '') }}</textarea>
                            <small class="form-text text-muted">Additional metadata in freeform text.</small>
                        </div>
                        
                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save Changes
                        </button>
                        
                        <a href="{{ route('admin.media.show', $mediaFile) }}" class="btn btn-secondary">
                            <i class="fas fa-times"></i> Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Preview and Info -->
        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview</h6>
                </div>
                <div class="card-body text-center">
                    @if(Str::startsWith($mediaFile->mime_type, 'image/'))
                        <img src="{{ Storage::url($mediaFile->path) }}" 
                             alt="{{ $mediaFile->alt_text }}" 
                             class="img-fluid rounded"
                             style="max-height: 300px;">
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-file fa-3x mb-3"></i>
                            <p>File type: {{ $mediaFile->mime_type }}</p>
                        </div>
                    @endif
                </div>
            </div>

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">File Information</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td><strong>Filename:</strong></td>
                                    <td>{{ $mediaFile->filename }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Dimensions:</strong></td>
                                    <td>{{ $mediaFile->width }} × {{ $mediaFile->height }} px</td>
                                </tr>
                                <tr>
                                    <td><strong>File Size:</strong></td>
                                    <td>{{ number_format($mediaFile->file_size / 1024, 2) }} KB</td>
                                </tr>
                                <tr>
                                    <td><strong>Uploaded:</strong></td>
                                    <td>{{ $mediaFile->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
    
    // Show/hide new category input based on selection
    categorySelect.addEventListener('change', function() {
        if (this.value === 'new') {
            newCategoryGroup.style.display = 'block';
            document.getElementById('new_category').required = true;
        } else {
            newCategoryGroup.style.display = 'none';
            document.getElementById('new_category').required = false;
        }
    });
    
    // If 'new' category was previously selected, show the input
    if (categorySelect.value === 'new') {
        newCategoryGroup.style.display = 'block';
        document.getElementById('new_category').required = true;
    }
});
</script>
@endsection