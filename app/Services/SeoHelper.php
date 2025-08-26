<?php

namespace App\Services;

use App\Models\Page;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class SeoHelper
{
    /**
     * Render meta tags for the current page
     */
    public static function renderMetaTags(string $routeName = null): string
    {
        $routeName = $routeName ?: Request::route()?->getName();
        $cacheKey = "seo_meta_{$routeName}";
        
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        $page = null;
        if ($routeName) {
            $page = Page::where('route_name', $routeName)->where('is_published', true)->first();
        }
        
        // Get default site settings
        $siteTitle = SiteSetting::get('site_title', config('app.name'));
        $siteDescription = SiteSetting::get('site_description', '');
        $siteKeywords = SiteSetting::get('site_keywords', '');
        $defaultOgImage = SiteSetting::get('default_og_image', '');
        
        // Use page-specific data if available, otherwise use defaults
        $title = $page ? $page->title : $siteTitle;
        $fullTitle = $page ? "{$page->title} - {$siteTitle}" : $siteTitle;
        $description = $page ? $page->meta_description : $siteDescription;
        $keywords = $page ? (is_array($page->meta_keywords) ? implode(', ', $page->meta_keywords) : $page->meta_keywords) : $siteKeywords;
        $canonicalUrl = $page ? $page->canonical_url : Request::url();
        
        $html = '';
        
        // Basic meta tags
        $html .= '<title>' . e($fullTitle) . '</title>' . "\n";
        $html .= '<meta name="description" content="' . e($description) . '">' . "\n";
        
        if ($keywords) {
            $html .= '<meta name="keywords" content="' . e($keywords) . '">' . "\n";
        }
        
        if ($canonicalUrl) {
            $html .= '<link rel="canonical" href="' . e($canonicalUrl) . '">' . "\n";
        }
        
        // Open Graph tags
        $ogData = $page ? $page->open_graph : [];
        if (is_string($ogData)) {
            $ogData = json_decode($ogData, true) ?: [];
        }
        
        $ogTitle = $ogData['title'] ?? $fullTitle;
        $ogDescription = $ogData['description'] ?? $description;
        $ogImage = $ogData['image'] ?? $defaultOgImage;
        $ogUrl = $ogData['url'] ?? Request::url();
        
        $html .= '<meta property="og:title" content="' . e($ogTitle) . '">' . "\n";
        $html .= '<meta property="og:description" content="' . e($ogDescription) . '">' . "\n";
        $html .= '<meta property="og:type" content="website">' . "\n";
        $html .= '<meta property="og:url" content="' . e($ogUrl) . '">' . "\n";
        
        if ($ogImage) {
            $html .= '<meta property="og:image" content="' . e($ogImage) . '">' . "\n";
        }
        
        // Twitter Card tags
        $twitterData = $page ? $page->twitter_card : [];\n        if (is_string($twitterData)) {
            $twitterData = json_decode($twitterData, true) ?: [];
        }
        
        $twitterCard = $twitterData['card'] ?? 'summary';
        $twitterTitle = $twitterData['title'] ?? $ogTitle;
        $twitterDescription = $twitterData['description'] ?? $ogDescription;
        $twitterImage = $twitterData['image'] ?? $ogImage;
        
        $html .= '<meta name="twitter:card" content="' . e($twitterCard) . '">' . "\n";
        $html .= '<meta name="twitter:title" content="' . e($twitterTitle) . '">' . "\n";
        $html .= '<meta name="twitter:description" content="' . e($twitterDescription) . '">' . "\n";
        
        if ($twitterImage) {
            $html .= '<meta name="twitter:image" content="' . e($twitterImage) . '">' . "\n";
        }
        
        // Additional meta tags
        $html .= '<meta name="robots" content="index, follow">' . "\n";
        $html .= '<meta name="author" content="' . e($siteTitle) . '">' . "\n";
        $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
        
        Cache::put($cacheKey, $html, 3600);
        
        return $html;
    }
    
    /**
     * Render schema.org structured data
     */
    public static function renderSchemaData(array $data = null): string
    {
        if (!$data) {
            $data = self::getDefaultSchemaData();
        }
        
        $json = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        
        return '<script type="application/ld+json">' . $json . '</script>';
    }
    
    /**
     * Get default schema.org data for organization
     */
    private static function getDefaultSchemaData(): array
    {
        $companyName = SiteSetting::get('company_name', config('app.name'));
        $description = SiteSetting::get('site_description', '');
        $contactEmail = SiteSetting::get('contact_email', '');
        $contactPhone = SiteSetting::get('contact_phone', '');
        $address = SiteSetting::get('company_address', '');
        $facebookUrl = SiteSetting::get('facebook_url', '');
        $twitterUrl = SiteSetting::get('twitter_url', '');
        $linkedinUrl = SiteSetting::get('linkedin_url', '');
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $companyName,
            'url' => Request::root(),
        ];
        
        if ($description) {
            $schema['description'] = $description;
        }
        
        if ($contactEmail || $contactPhone) {
            $contactPoint = [
                '@type' => 'ContactPoint',
                'contactType' => 'customer service'
            ];
            
            if ($contactEmail) {
                $contactPoint['email'] = $contactEmail;
            }
            
            if ($contactPhone) {
                $contactPoint['telephone'] = $contactPhone;
            }
            
            $schema['contactPoint'] = $contactPoint;
        }
        
        if ($address) {
            $schema['address'] = [
                '@type' => 'PostalAddress',
                'streetAddress' => $address
            ];
        }
        
        $socialUrls = array_filter([$facebookUrl, $twitterUrl, $linkedinUrl]);
        if (!empty($socialUrls)) {
            $schema['sameAs'] = $socialUrls;
        }
        
        return $schema;
    }
    
    /**
     * Generate sitemap XML
     */
    public static function generateSitemap(): string
    {
        $pages = Page::where('is_published', true)
            ->where('include_in_sitemap', true)
            ->orderBy('sitemap_priority', 'desc')
            ->get();
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
        
        foreach ($pages as $page) {
            $xml .= '  <url>' . "\n";
            $xml .= '    <loc>' . url($page->slug === 'home' ? '/' : "/{$page->slug}") . '</loc>' . "\n";
            $xml .= '    <lastmod>' . $page->updated_at->format('Y-m-d') . '</lastmod>' . "\n";
            $xml .= '    <changefreq>' . $page->sitemap_frequency . '</changefreq>' . "\n";
            $xml .= '    <priority>' . ($page->sitemap_priority / 10) . '</priority>' . "\n";
            $xml .= '  </url>' . "\n";
        }
        
        $xml .= '</urlset>';
        
        return $xml;
    }
    
    /**
     * Clear SEO cache
     */
    public static function clearCache(string $routeName = null): void
    {
        if ($routeName) {
            Cache::forget("seo_meta_{$routeName}");
        } else {
            // Clear all SEO caches
            $pages = Page::pluck('route_name');
            foreach ($pages as $route) {
                Cache::forget("seo_meta_{$route}");
            }
        }
    }
}