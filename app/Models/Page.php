<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'route_name',
        'title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'open_graph',
        'twitter_card',
        'schema_markup',
        'is_published',
        'include_in_sitemap',
        'sitemap_priority',
        'sitemap_frequency',
    ];

    protected $casts = [
        'meta_keywords' => 'array',
        'open_graph' => 'array',
        'twitter_card' => 'array',
        'schema_markup' => 'array',
        'is_published' => 'boolean',
        'include_in_sitemap' => 'boolean',
    ];

    // Sitemap frequency constants
    const FREQ_ALWAYS = 'always';
    const FREQ_HOURLY = 'hourly';
    const FREQ_DAILY = 'daily';
    const FREQ_WEEKLY = 'weekly';
    const FREQ_MONTHLY = 'monthly';
    const FREQ_YEARLY = 'yearly';
    const FREQ_NEVER = 'never';

    public static function getFrequencies(): array
    {
        return [
            self::FREQ_ALWAYS => 'Always',
            self::FREQ_HOURLY => 'Hourly',
            self::FREQ_DAILY => 'Daily',
            self::FREQ_WEEKLY => 'Weekly',
            self::FREQ_MONTHLY => 'Monthly',
            self::FREQ_YEARLY => 'Yearly',
            self::FREQ_NEVER => 'Never',
        ];
    }

    public function history(): MorphMany
    {
        return $this->morphMany(ContentHistory::class, 'contentable');
    }

    // Scope for published pages
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for sitemap inclusion
    public function scopeInSitemap($query)
    {
        return $query->where('include_in_sitemap', true)->published();
    }

    // Get formatted Open Graph tags
    public function getOpenGraphTagsAttribute(): string
    {
        if (!$this->open_graph) {
            return '';
        }

        $tags = [];
        foreach ($this->open_graph as $property => $content) {
            if ($content) {
                $tags[] = '<meta property="og:' . e($property) . '" content="' . e($content) . '">';
            }
        }

        return implode("\n", $tags);
    }

    // Get formatted Twitter Card tags
    public function getTwitterCardTagsAttribute(): string
    {
        if (!$this->twitter_card) {
            return '';
        }

        $tags = [];
        foreach ($this->twitter_card as $name => $content) {
            if ($content) {
                $tags[] = '<meta name="twitter:' . e($name) . '" content="' . e($content) . '">';
            }
        }

        return implode("\n", $tags);
    }

    // Get formatted meta keywords
    public function getMetaKeywordsStringAttribute(): string
    {
        return $this->meta_keywords ? implode(', ', $this->meta_keywords) : '';
    }

    // Clear cache when page is updated
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($page) {
            Cache::forget('page_seo_' . $page->route_name);
            Cache::forget('sitemap_pages');
        });

        static::deleted(function ($page) {
            Cache::forget('page_seo_' . $page->route_name);
            Cache::forget('sitemap_pages');
        });
    }

    // Helper method to get page by route name
    public static function getByRoute(string $routeName)
    {
        return Cache::remember('page_seo_' . $routeName, 3600, function () use ($routeName) {
            return static::where('route_name', $routeName)->published()->first();
        });
    }
}
