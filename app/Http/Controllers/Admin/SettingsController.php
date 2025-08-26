<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Models\ContentHistory;
use App\Models\AdminUser;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function __construct()
    {
        // Most settings operations require super admin privileges
        $this->middleware(function ($request, $next) {
            $admin = Auth::guard('admin')->user();
            if (!$admin || !$admin->isSuperAdmin()) {
                abort(403, 'Super Admin access required.');
            }
            return $next($request);
        })->except(['index', 'show']);
    }
    
    /**
     * Display settings management interface
     */
    public function index(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        // Get settings grouped by category
        $query = SiteSetting::orderBy('group')->orderBy('sort_order')->orderBy('label');
        
        // Filter by group if specified
        if ($request->filled('group')) {
            $query->where('group', $request->group);
        }
        
        // Non-super admins can only view public settings
        if (!$admin->isSuperAdmin()) {
            $query->where('is_public', true);
        }
        
        $settings = $query->get()->groupBy('group');
        
        // Get available groups for navigation
        $groups = SiteSetting::distinct()->pluck('group')->sort();
        
        // Get current group for active tab
        $currentGroup = $request->get('group', $groups->first());
        
        return view('admin.settings.index', compact('settings', 'groups', 'currentGroup'));
    }
    
    /**
     * Show form for creating new setting
     */
    public function create(Request $request)
    {
        $groups = SiteSetting::distinct()->pluck('group')->sort();
        $types = ['text', 'textarea', 'number', 'boolean', 'json', 'select', 'file'];
        $selectedGroup = $request->get('group', 'general');
        
        return view('admin.settings.create', compact('groups', 'types', 'selectedGroup'));
    }
    
    /**
     * Store new setting
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|string|max:255|unique:site_settings,key',
            'label' => 'required|string|max:255',
            'value' => 'nullable',
            'type' => 'required|in:text,textarea,number,boolean,json,select,file',
            'group' => 'required|string|max:100',
            'description' => 'nullable|string',
            'is_public' => 'boolean',
            'sort_order' => 'integer|min:0',
            'options' => 'nullable|array', // For select type
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        // Process value based on type
        $value = $this->processSettingValue($request->value, $request->type);
        
        $setting = SiteSetting::create([
            'key' => $request->key,
            'label' => $request->label,
            'value' => $value,
            'type' => $request->type,
            'group' => $request->group,
            'description' => $request->description,
            'is_public' => $request->boolean('is_public'),
            'sort_order' => $request->sort_order ?? 0,
            'options' => $request->options ?? []
        ]);
        
        // Track creation in history
        ContentHistory::trackChange(
            $setting,
            'created',
            null,
            $setting->toArray(),
            'Site setting created via admin panel'
        );
        
        // Clear settings cache
        Cache::forget('site_settings_all');
        Cache::forget('site_settings_public');
        
        return redirect()->route('admin.settings.index', ['group' => $setting->group])
            ->with('success', 'Setting created successfully.');
    }
    
    /**
     * Show setting details
     */
    public function show(SiteSetting $setting)
    {
        $admin = Auth::guard('admin')->user();
        
        // Check access permissions
        if (!$admin->isSuperAdmin() && !$setting->is_public) {
            abort(403, 'Access denied.');
        }
        
        return view('admin.settings.show', compact('setting'));
    }
    
    /**
     * Show form for editing setting
     */
    public function edit(SiteSetting $setting)
    {
        $groups = SiteSetting::distinct()->pluck('group')->sort();
        $types = ['text', 'textarea', 'number', 'boolean', 'json', 'select', 'file'];
        
        return view('admin.settings.edit', compact('setting', 'groups', 'types'));
    }
    
    /**
     * Update setting
     */
    public function update(Request $request, SiteSetting $setting)
    {
        $validator = Validator::make($request->all(), [
            'key' => 'required|string|max:255|unique:site_settings,key,' . $setting->id,
            'label' => 'required|string|max:255',
            'value' => 'nullable',
            'type' => 'required|in:text,textarea,number,boolean,json,select,file',
            'group' => 'required|string|max:100',
            'description' => 'nullable|string',
            'is_public' => 'boolean',
            'sort_order' => 'integer|min:0',
            'options' => 'nullable|array'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $oldData = $setting->toArray();
        
        // Process value based on type
        $value = $this->processSettingValue($request->value, $request->type);
        
        $setting->update([
            'key' => $request->key,
            'label' => $request->label,
            'value' => $value,
            'type' => $request->type,
            'group' => $request->group,
            'description' => $request->description,
            'is_public' => $request->boolean('is_public'),
            'sort_order' => $request->sort_order ?? 0,
            'options' => $request->options ?? []
        ]);
        
        // Track update in history
        ContentHistory::trackChange(
            $setting,
            'updated',
            $oldData,
            $setting->fresh()->toArray(),
            'Site setting updated via admin panel'
        );
        
        // Clear settings cache
        Cache::forget('site_settings_all');
        Cache::forget('site_settings_public');
        
        return redirect()->route('admin.settings.index', ['group' => $setting->group])
            ->with('success', 'Setting updated successfully.');
    }
    
    /**
     * Process setting value based on type
     */
    private function processSettingValue($value, $type)
    {
        switch ($type) {
            case 'boolean':
                return $value ? '1' : '0';
            case 'number':
                return is_numeric($value) ? (string)$value : '0';
            case 'json':
                return is_array($value) ? json_encode($value) : $value;
            case 'file':
                // Handle file uploads if needed
                return $value;
            default:
                return (string)$value;
        }
    }
    
    /**
     * Bulk update settings
     */
    public function bulkUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'settings' => 'required|array',
            'settings.*' => 'required'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        
        $updatedCount = 0;
        $errors = [];
        
        foreach ($request->settings as $settingId => $value) {
            try {
                $setting = SiteSetting::find($settingId);
                if (!$setting) {
                    continue;
                }
                
                $oldData = $setting->toArray();
                $processedValue = $this->processSettingValue($value, $setting->type);
                
                $setting->update(['value' => $processedValue]);
                
                // Track update in history
                ContentHistory::trackChange(
                    $setting,
                    'updated',
                    $oldData,
                    $setting->fresh()->toArray(),
                    'Bulk settings update via admin panel'
                );
                
                $updatedCount++;
                
            } catch (\Exception $e) {
                $settingLabel = isset($setting) ? $setting->label : $settingId;
                $errors[] = "Failed to update setting {$settingLabel}: {$e->getMessage()}";
            }
        }
        
        // Clear settings cache
        Cache::forget('site_settings_all');
        Cache::forget('site_settings_public');
        
        $message = "{$updatedCount} settings updated successfully.";
        
        if (!empty($errors)) {
            return back()->with('success', $message)->with('errors', $errors);
        }
        
        return back()->with('success', $message);
    }
    
    /**
     * Delete setting
     */
    public function destroy(SiteSetting $setting)
    {
        // Track deletion in history
        ContentHistory::trackChange(
            $setting,
            'deleted',
            $setting->toArray(),
            null,
            'Site setting deleted via admin panel'
        );
        
        $label = $setting->label;
        $setting->delete();
        
        // Clear settings cache
        Cache::forget('site_settings_all');
        Cache::forget('site_settings_public');
        
        return redirect()->route('admin.settings.index')
            ->with('success', "Setting '{$label}' deleted successfully.");
    }
    
    /**
     * SEO settings management
     */
    public function seo()
    {
        $seoSettings = SiteSetting::where('group', 'seo')->orderBy('sort_order')->get();
        $pages = Page::orderBy('title')->get();
        
        return view('admin.settings.seo', compact('seoSettings', 'pages'));
    }
    
    /**
     * Update SEO settings
     */
    public function updateSeo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'site_title' => 'required|string|max:255',
            'site_description' => 'required|string|max:500',
            'site_keywords' => 'nullable|string|max:500',
            'default_og_image' => 'nullable|string|max:500',
            'google_analytics_id' => 'nullable|string|max:100',
            'google_search_console' => 'nullable|string',
            'robots_txt' => 'nullable|string'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $seoData = [
            'site_title' => $request->site_title,
            'site_description' => $request->site_description,
            'site_keywords' => $request->site_keywords,
            'default_og_image' => $request->default_og_image,
            'google_analytics_id' => $request->google_analytics_id,
            'google_search_console' => $request->google_search_console,
            'robots_txt' => $request->robots_txt
        ];
        
        foreach ($seoData as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                [
                    'value' => $value,
                    'type' => in_array($key, ['site_description', 'google_search_console', 'robots_txt']) ? 'textarea' : 'text',
                    'group' => 'seo',
                    'label' => ucwords(str_replace('_', ' ', $key)),
                    'is_public' => true
                ]
            );
        }
        
        // Generate/update robots.txt
        if ($request->filled('robots_txt')) {
            Storage::disk('public')->put('../robots.txt', $request->robots_txt);
        }
        
        // Clear caches
        Cache::forget('site_settings_all');
        Cache::forget('site_settings_public');
        
        return back()->with('success', 'SEO settings updated successfully.');
    }
    
    /**
     * Generate sitemap.xml
     */
    public function generateSitemap()
    {
        try {
            Artisan::call('sitemap:generate');
            
            return response()->json([
                'success' => true,
                'message' => 'Sitemap generated successfully.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to generate sitemap: ' . $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * User management (Super Admin only)
     */
    public function users()
    {
        $users = AdminUser::orderBy('created_at', 'desc')->get();
        
        return view('admin.settings.users', compact('users'));
    }
    
    /**
     * Create new admin user
     */
    public function createUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required|in:super_admin,admin',
            'is_active' => 'boolean'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $user = AdminUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'is_active' => $request->boolean('is_active', true)
        ]);
        
        return back()->with('success', "Admin user '{$user->name}' created successfully.");
    }
    
    /**
     * Update admin user
     */
    public function updateUser(Request $request, AdminUser $user)
    {
        // Prevent self-demotion
        $currentUser = Auth::guard('admin')->user();
        if ($user->id === $currentUser->id && $request->role !== $currentUser->role) {
            return back()->withErrors(['role' => 'You cannot change your own role.']);
        }
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_users,email,' . $user->id,
            'role' => 'required|in:super_admin,admin',
            'is_active' => 'boolean',
            'password' => 'nullable|min:8|confirmed'
        ]);
        
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'is_active' => $request->boolean('is_active')
        ];
        
        if ($request->filled('password')) {
            $data['password'] = bcrypt($request->password);
        }
        
        $user->update($data);
        
        return back()->with('success', "Admin user '{$user->name}' updated successfully.");
    }
    
    /**
     * Delete admin user
     */
    public function deleteUser(AdminUser $user)
    {
        $currentUser = Auth::guard('admin')->user();
        
        // Prevent self-deletion
        if ($user->id === $currentUser->id) {
            return back()->withErrors(['error' => 'You cannot delete your own account.']);
        }
        
        // Prevent deletion of last super admin
        if ($user->role === 'super_admin' && AdminUser::where('role', 'super_admin')->count() <= 1) {
            return back()->withErrors(['error' => 'Cannot delete the last Super Admin account.']);
        }
        
        $name = $user->name;
        $user->delete();
        
        return back()->with('success', "Admin user '{$name}' deleted successfully.");
    }
    
    /**
     * Cache management
     */
    public function cache()
    {
        $cacheInfo = [
            'driver' => config('cache.default'),
            'size' => $this->getCacheSize(),
            'keys_count' => $this->getCacheKeysCount()
        ];
        
        return view('admin.settings.cache', compact('cacheInfo'));
    }
    
    /**
     * Clear specific caches
     */
    public function clearCache(Request $request)
    {
        $type = $request->get('type', 'all');
        
        switch ($type) {
            case 'config':
                Artisan::call('config:clear');
                break;
            case 'route':
                Artisan::call('route:clear');
                break;
            case 'view':
                Artisan::call('view:clear');
                break;
            case 'content':
                Cache::forget('site_settings_all');
                Cache::forget('site_settings_public');
                // Clear content-specific caches
                break;
            case 'all':
            default:
                Cache::flush();
                Artisan::call('config:clear');
                Artisan::call('route:clear');
                Artisan::call('view:clear');
                break;
        }
        
        return response()->json([
            'success' => true,
            'message' => ucfirst($type) . ' cache cleared successfully.'
        ]);
    }
    
    /**
     * Get cache size (simplified)
     */
    private function getCacheSize()
    {
        // This is a simplified implementation
        return 'Unknown';
    }
    
    /**
     * Get cache keys count (simplified)
     */
    private function getCacheKeysCount()
    {
        // This is a simplified implementation
        return 'Unknown';
    }
}
