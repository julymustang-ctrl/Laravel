@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="page-header">
    <h1 class="page-title">Welcome back, {{ $admin->name }}!</h1>
    <p class="page-subtitle">Here's what's happening with your site today.</p>
</div>

<!-- Statistics Cards -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px; margin-bottom: 40px;">
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <div style="background: linear-gradient(135deg, #3b82f6, #1e40af); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
            </div>
            <h3 style="font-size: 32px; font-weight: 700; color: #1e293b; margin-bottom: 4px;">{{ $stats['total_content_sections'] }}</h3>
            <p style="color: #64748b; margin-bottom: 8px;">Content Sections</p>
            <div style="display: flex; align-items: center; justify-content: center; gap: 8px; font-size: 14px;">
                <span style="color: #10b981; font-weight: 500;">{{ $stats['published_sections'] }} published</span>
                <span style="color: #64748b;">•</span>
                <span style="color: #f59e0b; font-weight: 500;">{{ $stats['draft_sections'] }} drafts</span>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <div style="background: linear-gradient(135deg, #10b981, #047857); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
            </div>
            <h3 style="font-size: 32px; font-weight: 700; color: #1e293b; margin-bottom: 4px;">{{ $stats['total_pages'] }}</h3>
            <p style="color: #64748b; margin-bottom: 8px;">Pages</p>
            <div style="font-size: 14px;">
                <span style="color: #64748b;">SEO Optimized</span>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <div style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
            </div>
            <h3 style="font-size: 32px; font-weight: 700; color: #1e293b; margin-bottom: 4px;">{{ $stats['total_media_files'] }}</h3>
            <p style="color: #64748b; margin-bottom: 8px;">Media Files</p>
            <div style="font-size: 14px;">
                <span style="color: #64748b;">Images & Assets</span>
            </div>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body" style="text-align: center;">
            <div style="background: linear-gradient(135deg, #8b5cf6, #7c3aed); color: white; width: 60px; height: 60px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                <svg width="30" height="30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
            </div>
            <h3 style="font-size: 32px; font-weight: 700; color: #1e293b; margin-bottom: 4px;">{{ $stats['recent_changes'] }}</h3>
            <p style="color: #64748b; margin-bottom: 8px;">Recent Changes</p>
            <div style="font-size: 14px;">
                <span style="color: #64748b;">Last 7 days</span>
            </div>
        </div>
    </div>
</div>

<div style="display: grid; grid-template-columns: 2fr 1fr; gap: 30px;">
    <!-- Quick Actions -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Quick Actions</h3>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                @foreach($quickActions as $action)
                <a href="{{ $action['url'] }}" class="quick-action-card" style="text-decoration: none; color: inherit;">
                    <div style="padding: 20px; border: 2px solid #e2e8f0; border-radius: 12px; transition: all 0.2s ease; cursor: pointer;" 
                         onmouseover="this.style.borderColor='{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}'; this.style.transform='translateY(-2px)'"
                         onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='translateY(0)'">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px;">
                            <div style="width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; background-color: {{ $action['color'] === 'primary' ? '#eff6ff' : ($action['color'] === 'success' ? '#f0fdf4' : ($action['color'] === 'warning' ? '#fffbeb' : ($action['color'] === 'danger' ? '#fef2f2' : '#f0f9ff'))) }};">
                                @if($action['icon'] === 'edit')
                                    <svg width="20" height="20" fill="none" stroke="{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                @elseif($action['icon'] === 'image')
                                    <svg width="20" height="20" fill="none" stroke="{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                @elseif($action['icon'] === 'search')
                                    <svg width="20" height="20" fill="none" stroke="{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                @elseif($action['icon'] === 'settings')
                                    <svg width="20" height="20" fill="none" stroke="{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                @else
                                    <svg width="20" height="20" fill="none" stroke="{{ $action['color'] === 'primary' ? '#3b82f6' : ($action['color'] === 'success' ? '#10b981' : ($action['color'] === 'warning' ? '#f59e0b' : ($action['color'] === 'danger' ? '#ef4444' : '#06b6d4'))) }}" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                    </svg>
                                @endif
                            </div>
                            <h4 style="font-size: 16px; font-weight: 600; color: #1e293b; margin: 0;">{{ $action['title'] }}</h4>
                        </div>
                        <p style="color: #64748b; font-size: 14px; margin: 0;">{{ $action['description'] }}</p>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    
    <!-- Recent Activity -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Activity</h3>
        </div>
        <div class="card-body" style="padding: 0;">
            @if($recentActivities->count() > 0)
                <div style="max-height: 400px; overflow-y: auto;">
                    @foreach($recentActivities as $activity)
                    <div style="padding: 16px 24px; border-bottom: 1px solid #e2e8f0; display: flex; align-items: start; gap: 12px;">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background-color: {{ $activity['action'] === 'created' ? '#10b981' : ($activity['action'] === 'updated' ? '#3b82f6' : ($activity['action'] === 'deleted' ? '#ef4444' : '#f59e0b')) }}; margin-top: 6px; flex-shrink: 0;"></div>
                        <div style="flex: 1; min-width: 0;">
                            <div style="font-size: 14px; color: #1e293b; margin-bottom: 4px;">
                                <strong>{{ $activity['admin_name'] }}</strong> {{ $activity['action'] }} {{ $activity['type'] }}
                            </div>
                            @if($activity['summary'])
                                <div style="font-size: 13px; color: #64748b; margin-bottom: 4px;">
                                    {{ Str::limit($activity['summary'], 60) }}
                                </div>
                            @endif
                            <div style="font-size: 12px; color: #94a3b8;">
                                {{ $activity['created_at']->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div style="padding: 40px 24px; text-align: center; color: #64748b;">
                    <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="margin: 0 auto 16px; opacity: 0.5;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    <p>No recent activity</p>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- System Information (Super Admin only) -->
@if($admin->isSuperAdmin())
<div style="margin-top: 40px;">
    <div class="card">
        <div class="card-header" style="display: flex; justify-content: between; align-items: center;">
            <h3 class="card-title">System Management</h3>
            <div style="display: flex; gap: 12px;">
                <button onclick="clearCache()" class="btn btn-secondary btn-sm">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Clear Cache
                </button>
                <button onclick="generateSitemap()" class="btn btn-secondary btn-sm">
                    <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
                    </svg>
                    Generate Sitemap
                </button>
            </div>
        </div>
        <div class="card-body">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div style="text-align: center; padding: 20px; background-color: #f8fafc; border-radius: 8px;">
                    <div style="font-size: 20px; font-weight: 600; color: #1e293b;">{{ $stats['admin_users'] }}</div>
                    <div style="color: #64748b; font-size: 14px;">Admin Users</div>
                </div>
                <div style="text-align: center; padding: 20px; background-color: #f8fafc; border-radius: 8px;">
                    <div style="font-size: 20px; font-weight: 600; color: #1e293b;">{{ $stats['total_settings'] }}</div>
                    <div style="color: #64748b; font-size: 14px;">Site Settings</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection

@push('scripts')
<script>
function clearCache() {
    if (confirm('Are you sure you want to clear the cache?')) {
        fetch('{{ route("admin.dashboard.clear-cache") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Cache cleared successfully!');
            } else {
                alert('Failed to clear cache: ' + data.message);
            }
        })
        .catch(error => {
            alert('Error: ' + error.message);
        });
    }
}

function generateSitemap() {
    if (confirm('Are you sure you want to regenerate the sitemap?')) {
        fetch('{{ route("admin.settings.sitemap.generate") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                'Content-Type': 'application/json',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Sitemap generated successfully!');
            } else {
                alert('Failed to generate sitemap: ' + data.message);
            }
        })
        .catch(error => {
            alert('Error: ' + error.message);
        });
    }
}
</script>
@endpush