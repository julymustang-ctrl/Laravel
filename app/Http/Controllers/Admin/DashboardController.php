<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use App\Models\ContentSection;
use App\Models\ContentHistory;
use App\Models\MediaFile;
use App\Models\Page;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Show admin dashboard
     */
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        
        // Get statistics
        $stats = $this->getDashboardStats();
        
        // Get recent activities
        $recentActivities = $this->getRecentActivities();
        
        // Get quick actions based on role
        $quickActions = $this->getQuickActions($admin);
        
        return view('admin.dashboard', compact('stats', 'recentActivities', 'quickActions', 'admin'));
    }
    
    /**
     * Get dashboard statistics
     */
    private function getDashboardStats()
    {
        return Cache::remember('admin_dashboard_stats', 300, function() {
            return [
                'total_content_sections' => ContentSection::count(),
                'published_sections' => ContentSection::where('is_published', true)->count(),
                'draft_sections' => ContentSection::where('is_published', false)->count(),
                'total_pages' => Page::count(),
                'total_media_files' => MediaFile::count(),
                'total_settings' => SiteSetting::count(),
                'recent_changes' => ContentHistory::where('created_at', '>=', now()->subDays(7))->count(),
                'admin_users' => AdminUser::where('is_active', true)->count(),
            ];
        });
    }
    
    /**
     * Get recent activities
     */
    private function getRecentActivities()
    {
        return ContentHistory::with(['adminUser'])
            ->orderBy('created_at', 'desc')
            ->limit(10)
            ->get()
            ->map(function ($history) {
                return [
                    'id' => $history->id,
                    'action' => $history->action,
                    'type' => class_basename($history->contentable_type),
                    'admin_name' => $history->adminUser->name ?? 'Unknown',
                    'created_at' => $history->created_at,
                    'reason' => $history->reason,
                    'summary' => $history->changes_summary
                ];
            });
    }
    
    /**
     * Get quick actions based on admin role
     */
    private function getQuickActions($admin)
    {
        $actions = [
            [
                'title' => 'Manage Content',
                'description' => 'Edit site content and sections',
                'url' => route('admin.content.index'),
                'icon' => 'edit',
                'color' => 'primary'
            ],
            [
                'title' => 'Media Library',
                'description' => 'Manage images and media files',
                'url' => route('admin.media.index'),
                'icon' => 'image',
                'color' => 'success'
            ],
            [
                'title' => 'SEO Management',
                'description' => 'Manage page SEO and meta tags',
                'url' => route('admin.pages.index'),
                'icon' => 'search',
                'color' => 'info'
            ]
        ];
        
        // Add super admin only actions
        if ($admin->isSuperAdmin()) {
            $actions[] = [
                'title' => 'Site Settings',
                'description' => 'Manage global site settings',
                'url' => route('admin.settings.index'),
                'icon' => 'settings',
                'color' => 'warning'
            ];
            
            $actions[] = [
                'title' => 'User Management',
                'description' => 'Manage admin users and roles',
                'url' => route('admin.settings.users'),
                'icon' => 'users',
                'color' => 'danger'
            ];
        }
        
        return $actions;
    }
    
    /**
     * Clear dashboard cache
     */
    public function clearCache()
    {
        Cache::forget('admin_dashboard_stats');
        Cache::flush(); // Clear all cache for content updates
        
        return response()->json([
            'success' => true,
            'message' => 'Cache cleared successfully'
        ]);
    }
    
    /**
     * Get system information
     */
    public function systemInfo()
    {
        $admin = Auth::guard('admin')->user();
        
        if (!$admin->isSuperAdmin()) {
            abort(403, 'Unauthorized');
        }
        
        $info = [
            'laravel_version' => app()->version(),
            'php_version' => PHP_VERSION,
            'database_size' => $this->getDatabaseSize(),
            'cache_driver' => config('cache.default'),
            'storage_path' => storage_path(),
            'last_backup' => $this->getLastBackupInfo()
        ];
        
        return response()->json($info);
    }
    
    /**
     * Get database size information
     */
    private function getDatabaseSize()
    {
        try {
            $database = config('database.connections.mysql.database');
            $result = DB::select("SELECT ROUND(SUM(data_length + index_length) / 1024 / 1024, 1) AS 'size_mb' FROM information_schema.tables WHERE table_schema = ?", [$database]);
            return $result[0]->size_mb ?? 'Unknown';
        } catch (\Exception $e) {
            return 'Unable to calculate';
        }
    }
    
    /**
     * Get last backup information
     */
    private function getLastBackupInfo()
    {
        // This would be implemented based on backup strategy
        return 'Not configured';
    }
}
