<?php

namespace App\Services;

use App\Models\ContentSection;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;

class ContentHelper
{
    /**
     * Get content section by key
     */
    public static function getContent(string $key, string $default = '', bool $useCache = true): string
    {
        $cacheKey = "content_section_{$key}";
        
        if ($useCache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $content = ContentSection::getByKey($key);
        
        if (!$content) {
            return $default;
        }
        
        $renderedContent = self::renderContent($content);
        
        if ($useCache) {
            Cache::put($cacheKey, $renderedContent, 3600); // Cache for 1 hour
        }
        
        return $renderedContent;
    }
    
    /**
     * Get multiple content sections by page context
     */
    public static function getPageContent(string $pageContext, bool $useCache = true): array
    {
        $cacheKey = "page_content_{$pageContext}";
        
        if ($useCache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $sections = ContentSection::where('page_context', $pageContext)
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->get()
            ->keyBy('key');
        
        $content = [];
        foreach ($sections as $key => $section) {
            $content[$key] = self::renderContent($section);
        }
        
        if ($useCache) {
            Cache::put($cacheKey, $content, 3600);
        }
        
        return $content;
    }
    
    /**
     * Get global content sections
     */
    public static function getGlobalContent(bool $useCache = true): array
    {
        $cacheKey = "global_content";
        
        if ($useCache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $sections = ContentSection::where('is_global', true)
            ->where('is_published', true)
            ->orderBy('sort_order')
            ->get()
            ->keyBy('key');
        
        $content = [];
        foreach ($sections as $key => $section) {
            $content[$key] = self::renderContent($section);
        }
        
        if ($useCache) {
            Cache::put($cacheKey, $content, 3600);
        }
        
        return $content;
    }
    
    /**
     * Get site setting by key
     */
    public static function getSetting(string $key, string $default = '', bool $useCache = true): string
    {
        $cacheKey = "site_setting_{$key}";
        
        if ($useCache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $setting = SiteSetting::get($key);
        
        if ($setting === null) {
            return $default;
        }
        
        if ($useCache) {
            Cache::put($cacheKey, $setting, 3600);
        }
        
        return $setting;
    }
    
    /**
     * Get all public site settings
     */
    public static function getPublicSettings(bool $useCache = true): array
    {
        $cacheKey = "public_settings";
        
        if ($useCache && Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $settings = SiteSetting::getPublicSettings();
        
        if ($useCache) {
            Cache::put($cacheKey, $settings, 3600);
        }
        
        return $settings;
    }
    
    /**
     * Render content based on type
     */
    private static function renderContent(ContentSection $section): string
    {
        switch ($section->type) {
            case 'text':
                return e($section->content); // Escape HTML for security
                
            case 'html':
                return $section->rendered_content; // Already processed by model
                
            case 'image':
                return self::renderImage($section);
                
            case 'json':
                return self::renderJson($section);
                
            default:
                return e($section->content);
        }
    }
    
    /**
     * Render image content
     */
    private static function renderImage(ContentSection $section): string
    {
        $data = $section->data ?? [];
        $altText = $data['alt_text'] ?? $section->name;
        $classes = $data['css_classes'] ?? '';
        $maxWidth = $data['max_width'] ?? null;
        $maxHeight = $data['max_height'] ?? null;
        
        $style = '';
        if ($maxWidth || $maxHeight) {
            $styleProps = [];
            if ($maxWidth) $styleProps[] = "max-width: {$maxWidth}px";
            if ($maxHeight) $styleProps[] = "max-height: {$maxHeight}px";
            $style = ' style="' . implode('; ', $styleProps) . '"';
        }
        
        return "<img src=\"{$section->content}\" alt=\"{$altText}\" class=\"{$classes}\"{$style}>";
    }
    
    /**
     * Render JSON content
     */
    private static function renderJson(ContentSection $section): string
    {
        $data = json_decode($section->content, true);
        
        if (!is_array($data)) {
            return '';
        }
        
        // Check if it's a simple array of stats/items
        if (isset($data[0]) && is_array($data[0])) {
            return self::renderStatsArray($data);
        }
        
        // For other JSON structures, return as formatted JSON
        return '<pre>' . json_encode($data, JSON_PRETTY_PRINT) . '</pre>';
    }
    
    /**
     * Render stats array (common pattern)
     */
    private static function renderStatsArray(array $stats): string
    {
        $html = '<div class="stats-container">';
        
        foreach ($stats as $stat) {
            if (!is_array($stat) || !isset($stat['label']) || !isset($stat['value'])) {
                continue;
            }
            
            $icon = $stat['icon'] ?? '';
            $iconHtml = $icon ? "<i class=\"icon-{$icon}\"></i>" : '';
            
            $html .= '<div class="stat-item">';
            $html .= $iconHtml;
            $html .= '<div class="stat-value">' . e($stat['value']) . '</div>';
            $html .= '<div class="stat-label">' . e($stat['label']) . '</div>';
            $html .= '</div>';
        }
        
        $html .= '</div>';
        
        return $html;
    }
    
    /**
     * Check if content exists
     */
    public static function hasContent(string $key): bool
    {
        return ContentSection::where('key', $key)
            ->where('is_published', true)
            ->exists();
    }
    
    /**
     * Clear content cache
     */
    public static function clearCache(string $key = null): void
    {
        if ($key) {
            Cache::forget("content_section_{$key}");
            Cache::forget("site_setting_{$key}");
        } else {
            // Clear all content-related caches
            $keys = [
                'global_content',
                'public_settings'
            ];
            
            foreach ($keys as $cacheKey) {
                Cache::forget($cacheKey);
            }
            
            // Clear page-specific caches
            $pageContexts = ContentSection::distinct()->pluck('page_context')->filter();
            foreach ($pageContexts as $pageContext) {
                Cache::forget("page_content_{$pageContext}");
            }
        }
    }
    
    /**
     * Get content for inline editing (admin mode)
     */
    public static function getEditableContent(string $key, string $default = ''): array
    {
        $section = ContentSection::where('key', $key)->first();
        
        if (!$section) {
            return [
                'content' => $default,
                'editable' => false,
                'key' => $key
            ];
        }
        
        return [
            'content' => self::renderContent($section),
            'editable' => true,
            'key' => $key,
            'type' => $section->type,
            'id' => $section->id
        ];
    }
}