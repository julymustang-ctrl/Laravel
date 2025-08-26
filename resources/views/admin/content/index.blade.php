@extends('admin.layouts.app')

@section('title', 'Content Management')
@section('page-title', 'Content Management')

@section('content')
<div class="page-header">
    <div style="display: flex; justify-content: between; align-items: center; margin-bottom: 20px;">
        <div>
            <h1 class="page-title">Content Management</h1>
            <p class="page-subtitle">Manage all site content sections and pages</p>
        </div>
        <a href="{{ route('admin.content.create') }}" class="btn btn-primary">
            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Add Content Section
        </a>
    </div>
    
    <!-- Filters and Search -->
    <div class="card" style="margin-bottom: 30px;">
        <div class="card-body" style="padding: 20px;">
            <form method="GET" action="{{ route('admin.content.index') }}" style="display: grid; grid-template-columns: 1fr 1fr 1fr auto; gap: 16px; align-items: end;">
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Search</label>
                    <input type="text" name="search" class="form-control" placeholder="Search by name, key, or content..." value="{{ request('search') }}">
                </div>
                
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Page Context</label>
                    <select name="page" class="form-control">
                        <option value="">All Pages</option>
                        <option value="global" {{ request('page') === 'global' ? 'selected' : '' }}>Global Sections</option>
                        @foreach($pages as $page)
                            <option value="{{ $page }}" {{ request('page') === $page ? 'selected' : '' }}>{{ ucfirst($page) }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group" style="margin-bottom: 0;">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="">All Status</option>
                        <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                        <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                    </select>
                </div>
                
                <div style="display: flex; gap: 8px;">
                    <button type="submit" class="btn btn-primary">Filter</button>
                    <a href="{{ route('admin.content.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content Sections -->
<div class="card">
    <div class="card-header" style="display: flex; justify-content: between; align-items: center;">
        <h3 class="card-title">Content Sections ({{ $contentSections->total() }})</h3>
        
        <!-- Bulk Actions -->
        <div style="display: flex; align-items: center; gap: 12px;">
            <select id="bulkAction" class="form-control" style="width: auto;">
                <option value="">Bulk Actions</option>
                <option value="publish">Publish Selected</option>
                <option value="unpublish">Unpublish Selected</option>
                @if(Auth::guard('admin')->user()->isSuperAdmin())
                    <option value="delete">Delete Selected</option>
                @endif
            </select>
            <button onclick="executeBulkAction()" class="btn btn-secondary btn-sm" disabled id="bulkActionBtn">Apply</button>
        </div>
    </div>
    
    @if($contentSections->count() > 0)
        <form id="bulkForm" method="POST" action="{{ route('admin.content.bulk-action') }}">
            @csrf
            <input type="hidden" name="action" id="bulkActionInput">
            
            <div style="overflow-x: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th width="40">
                                <input type="checkbox" id="selectAll" onchange="toggleSelectAll()">
                            </th>
                            <th>Name</th>
                            <th>Key</th>
                            <th>Type</th>
                            <th>Page Context</th>
                            <th>Status</th>
                            <th>Last Modified</th>
                            <th width="200">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contentSections as $section)
                        <tr>
                            <td>
                                <input type="checkbox" name="selected[]" value="{{ $section->id }}" class="section-checkbox" onchange="updateBulkActions()">
                            </td>
                            <td>
                                <div style="font-weight: 500; color: #1e293b;">{{ $section->name }}</div>
                                @if($section->is_global)
                                    <span style="background-color: #eff6ff; color: #3b82f6; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: 500;">Global</span>
                                @endif
                            </td>
                            <td>
                                <code style="background-color: #f1f5f9; color: #475569; padding: 4px 8px; border-radius: 4px; font-size: 12px;">{{ $section->key }}</code>
                            </td>
                            <td>
                                <span style="background-color: #f0fdf4; color: #166534; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 500; text-transform: uppercase;">{{ $section->type }}</span>
                            </td>
                            <td>
                                @if($section->page_context)
                                    <span style="color: #64748b;">{{ ucfirst($section->page_context) }}</span>
                                @else
                                    <span style="color: #94a3b8; font-style: italic;">No specific page</span>
                                @endif
                            </td>
                            <td>
                                <button onclick="togglePublish({{ $section->id }})" 
                                        class="btn btn-sm {{ $section->is_published ? 'btn-success' : 'btn-warning' }}"
                                        style="min-width: 80px;">
                                    {{ $section->is_published ? 'Published' : 'Draft' }}
                                </button>
                            </td>
                            <td style="color: #64748b; font-size: 14px;">
                                {{ $section->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                <div style="display: flex; gap: 4px;">
                                    <a href="{{ route('admin.content.edit', $section) }}" class="btn btn-secondary btn-sm" title="Edit">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ route('admin.content.show', $section) }}" class="btn btn-secondary btn-sm" title="View">
                                        <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <form method="POST" action="{{ route('admin.content.duplicate', $section) }}" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-sm" title="Duplicate">
                                            <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    @if(Auth::guard('admin')->user()->isSuperAdmin())
                                        <form method="POST" action="{{ route('admin.content.destroy', $section) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this content section?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                <svg width="14" height="14" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
        
        <!-- Pagination -->
        <div style="padding: 20px 24px; border-top: 1px solid #e2e8f0;">
            {{ $contentSections->withQueryString()->links() }}
        </div>
    @else
        <div class="card-body" style="text-align: center; padding: 60px 24px;">
            <svg width="64" height="64" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 20px; color: #94a3b8;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <h3 style="color: #64748b; margin-bottom: 12px;">No content sections found</h3>
            <p style="color: #94a3b8; margin-bottom: 20px;">Get started by creating your first content section.</p>
            <a href="{{ route('admin.content.create') }}" class="btn btn-primary">
                <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Add Content Section
            </a>
        </div>
    @endif
</div>

<!-- Page Context Navigation -->
<div style="margin-top: 30px;">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Navigation by Page</h3>
        </div>
        <div class="card-body">
            <div style="display: flex; flex-wrap: wrap; gap: 12px;">
                <a href="{{ route('admin.content.by-page', 'global') }}" class="btn btn-secondary btn-sm">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                    Global Sections
                </a>
                @foreach($pages as $page)
                    <a href="{{ route('admin.content.by-page', $page) }}" class="btn btn-secondary btn-sm">
                        {{ ucfirst($page) }} Page
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function toggleSelectAll() {
    const selectAll = document.getElementById('selectAll');
    const checkboxes = document.querySelectorAll('.section-checkbox');
    
    checkboxes.forEach(checkbox => {
        checkbox.checked = selectAll.checked;
    });
    
    updateBulkActions();
}

function updateBulkActions() {
    const checkboxes = document.querySelectorAll('.section-checkbox:checked');
    const bulkActionBtn = document.getElementById('bulkActionBtn');
    
    bulkActionBtn.disabled = checkboxes.length === 0;
}

function executeBulkAction() {
    const action = document.getElementById('bulkAction').value;
    const checkboxes = document.querySelectorAll('.section-checkbox:checked');
    
    if (!action) {
        alert('Please select an action');
        return;
    }
    
    if (checkboxes.length === 0) {
        alert('Please select at least one content section');
        return;
    }
    
    const actionText = action === 'delete' ? 'delete' : (action === 'publish' ? 'publish' : 'unpublish');
    
    if (confirm(`Are you sure you want to ${actionText} ${checkboxes.length} selected content section(s)?`)) {
        document.getElementById('bulkActionInput').value = action;
        document.getElementById('bulkForm').submit();
    }
}

function togglePublish(sectionId) {
    fetch(`/admin/content/${sectionId}/toggle-publish`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            location.reload();
        } else {
            alert('Failed to update status: ' + data.message);
        }
    })
    .catch(error => {
        alert('Error: ' + error.message);
    });
}
</script>
@endpush