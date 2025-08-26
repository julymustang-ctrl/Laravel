@extends('admin.layouts.app')

@section('title', 'Media Details - ' . $mediaFile->filename)

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Media Details</h1>
        <div>
            <a href="{{ route('admin.media.index') }}" class="btn btn-sm btn-secondary shadow-sm mr-2">
                <i class="fas fa-arrow-left fa-sm text-white-50"></i> Back to Media Library
            </a>
            <a href="{{ route('admin.media.edit', $mediaFile) }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-edit fa-sm text-white-50"></i> Edit
            </a>
        </div>
    </div>

    <div class="row">
        <!-- Media Preview -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview</h6>
                </div>
                <div class="card-body text-center">
                    @if(Str::startsWith($mediaFile->mime_type, 'image/'))
                        <img src="{{ Storage::url($mediaFile->path) }}" 
                             alt="{{ $mediaFile->alt_text }}" 
                             class="img-fluid rounded"
                             style="max-height: 500px;">
                    @else
                        <div class="alert alert-info">
                            <i class="fas fa-file fa-3x mb-3"></i>
                            <p>File type: {{ $mediaFile->mime_type }}</p>
                            <a href="{{ Storage::url($mediaFile->path) }}" class="btn btn-primary" download>
                                <i class="fas fa-download"></i> Download File
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Media Info -->
        <div class="col-xl-4 col-lg-5">
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
                                    <td><strong>Original Name:</strong></td>
                                    <td>{{ $mediaFile->original_filename }}</td>
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
                                    <td><strong>MIME Type:</strong></td>
                                    <td>{{ $mediaFile->mime_type }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Category:</strong></td>
                                    <td>
                                        <span class="badge badge-secondary">{{ ucfirst($mediaFile->category) }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Uploaded By:</strong></td>
                                    <td>{{ $mediaFile->uploader->name ?? 'Unknown' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Uploaded:</strong></td>
                                    <td>{{ $mediaFile->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Last Modified:</strong></td>
                                    <td>{{ $mediaFile->updated_at->format('M d, Y H:i') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Actions -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Actions</h6>
                </div>
                <div class="card-body">
                    <a href="{{ Storage::url($mediaFile->path) }}" class="btn btn-primary btn-block mb-2" download>
                        <i class="fas fa-download"></i> Download
                    </a>
                    
                    <button class="btn btn-info btn-block mb-2" data-toggle="modal" data-target="#replaceModal">
                        <i class="fas fa-sync-alt"></i> Replace File
                    </button>
                    
                    <button class="btn btn-warning btn-block mb-2" onclick="copyUrlToClipboard()">
                        <i class="fas fa-copy"></i> Copy URL
                    </button>
                    
                    <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#deleteModal">
                        <i class="fas fa-trash"></i> Delete File
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Usage Information -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Usage Information</h6>
        </div>
        <div class="card-body">
            @if(!empty($usage))
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Page/Section</th>
                                <th>Type</th>
                                <th>Last Used</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($usage as $item)
                            <tr>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['type'] }}</td>
                                <td>{{ $item['last_used'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">This media file is not currently used in any content sections.</p>
            @endif
        </div>
    </div>
</div>

<!-- Replace Modal -->
<div class="modal fade" id="replaceModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.media.replace', $mediaFile) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Replace Media File</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="replacementFile">Select New File</label>
                        <input type="file" name="file" id="replacementFile" class="form-control-file" accept="image/*" required>
                        <small class="form-text text-muted">Current dimensions: {{ $mediaFile->width }} × {{ $mediaFile->height }} px</small>
                    </div>
                    
                    <div class="form-group form-check">
                        <input type="checkbox" name="maintain_dimensions" id="maintain_dimensions" class="form-check-input" value="1" checked>
                        <label for="maintain_dimensions" class="form-check-label">Maintain current dimensions</label>
                    </div>
                    
                    <div class="form-group form-check">
                        <input type="checkbox" name="backup_original" id="backup_original" class="form-check-input" value="1" checked>
                        <label for="backup_original" class="form-check-label">Backup original file</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Replace File</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Media File</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this media file?</p>
                <p><strong>{{ $mediaFile->filename }}</strong></p>
                <p class="text-danger">This action cannot be undone.</p>
                
                @if(!empty($usage))
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-triangle"></i> This file is currently used in {{ count($usage) }} location(s).
                </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="{{ route('admin.media.destroy', $mediaFile) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete File</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
function copyUrlToClipboard() {
    const url = "{{ Storage::url($mediaFile->path) }}";
    navigator.clipboard.writeText(url).then(() => {
        // Show success message
        const originalText = event.target.innerHTML;
        event.target.innerHTML = '<i class="fas fa-check"></i> Copied!';
        setTimeout(() => {
            event.target.innerHTML = originalText;
        }, 2000);
    }).catch(err => {
        console.error('Failed to copy: ', err);
        alert('Failed to copy URL to clipboard');
    });
}
</script>
@endsection