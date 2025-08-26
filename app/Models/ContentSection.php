<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;

class ContentSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'type',
        'content',
        'data',
        'page_context',
        'is_global',
        'is_published',
        'sort_order',
        'seo_data',
    ];

    protected $casts = [
        'data' => 'array',
        'seo_data' => 'array',
        'is_global' => 'boolean',
        'is_published' => 'boolean',
    ];

    // Content type constants
    const TYPE_TEXT = 'text';
    const TYPE_HTML = 'html';
    const TYPE_IMAGE = 'image';
    const TYPE_GALLERY = 'gallery';
    const TYPE_JSON = 'json';

    public static function getTypes(): array
    {
        return [
            self::TYPE_TEXT => 'Plain Text',
            self::TYPE_HTML => 'Rich Text/HTML',
            self::TYPE_IMAGE => 'Image',
            self::TYPE_GALLERY => 'Image Gallery',
            self::TYPE_JSON => 'Structured Data',
        ];
    }

    public function history(): MorphMany
    {
        return $this->morphMany(ContentHistory::class, 'contentable');
    }

    public function getImageDataAttribute(): ?array
    {
        if ($this->type === self::TYPE_IMAGE && isset($this->data['image_id'])) {
            $media = MediaFile::find($this->data['image_id']);
            return $media ? $media->toArray() : null;
        }
        return null;
    }

    public function getRenderedContentAttribute(): string
    {
        switch ($this->type) {
            case self::TYPE_HTML:
                return $this->content;
            case self::TYPE_TEXT:
                return e($this->content);
            case self::TYPE_IMAGE:
                $imageData = $this->image_data;
                if ($imageData) {
                    return '<img src="' . asset('storage/' . $imageData['path']) . '" alt="' . e($imageData['alt_text'] ?? '') . '" />';
                }
                return '';
            default:
                return $this->content;
        }
    }

    // Scope for published content
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for global sections
    public function scopeGlobal($query)
    {
        return $query->where('is_global', true);
    }

    // Scope for specific page context
    public function scopeForPage($query, string $pageContext)
    {
        return $query->where(function ($q) use ($pageContext) {
            $q->where('page_context', $pageContext)
              ->orWhere('is_global', true);
        });
    }

    // Clear cache when content is updated
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($section) {
            Cache::forget('content_section_' . $section->key);
            Cache::forget('page_content_' . $section->page_context);
        });

        static::deleted(function ($section) {
            Cache::forget('content_section_' . $section->key);
            Cache::forget('page_content_' . $section->page_context);
        });
    }

    // Helper method to get content by key
    public static function getByKey(string $key, $default = null)
    {
        return Cache::remember('content_section_' . $key, 3600, function () use ($key, $default) {
            $section = static::where('key', $key)->published()->first();
            return $section ? $section->rendered_content : $default;
        });
    }
}
