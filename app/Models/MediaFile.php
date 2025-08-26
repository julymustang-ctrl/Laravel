<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Storage;

class MediaFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'filename',
        'path',
        'disk',
        'mime_type',
        'size',
        'width',
        'height',
        'alt_text',
        'title',
        'category',
        'metadata',
        'is_active',
        'uploaded_by',
    ];

    protected $casts = [
        'metadata' => 'array',
        'is_active' => 'boolean',
    ];

    // Media categories
    const CATEGORY_HERO = 'hero';
    const CATEGORY_LOGO = 'logo';
    const CATEGORY_SERVICE = 'service';
    const CATEGORY_TEAM = 'team';
    const CATEGORY_GALLERY = 'gallery';
    const CATEGORY_BLOG = 'blog';
    const CATEGORY_GENERAL = 'general';

    public static function getCategories(): array
    {
        return [
            self::CATEGORY_HERO => 'Hero Images',
            self::CATEGORY_LOGO => 'Logos',
            self::CATEGORY_SERVICE => 'Services',
            self::CATEGORY_TEAM => 'Team',
            self::CATEGORY_GALLERY => 'Gallery',
            self::CATEGORY_BLOG => 'Blog',
            self::CATEGORY_GENERAL => 'General',
        ];
    }

    public function uploadedBy(): BelongsTo
    {
        return $this->belongsTo(AdminUser::class, 'uploaded_by');
    }

    public function history(): MorphMany
    {
        return $this->morphMany(ContentHistory::class, 'contentable');
    }

    // Get full URL
    public function getUrlAttribute(): string
    {
        return Storage::disk($this->disk)->url($this->path);
    }

    // Get human readable file size
    public function getFormattedSizeAttribute(): string
    {
        $bytes = $this->size;
        $units = ['B', 'KB', 'MB', 'GB'];
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, 2) . ' ' . $units[$i];
    }

    // Get dimensions string
    public function getDimensionsAttribute(): string
    {
        if ($this->width && $this->height) {
            return $this->width . ' × ' . $this->height;
        }
        return 'Unknown';
    }

    // Check if image matches required dimensions
    public function matchesDimensions(int $width, int $height, int $tolerance = 10): bool
    {
        if (!$this->width || !$this->height) {
            return false;
        }

        $widthDiff = abs($this->width - $width);
        $heightDiff = abs($this->height - $height);

        return $widthDiff <= $tolerance && $heightDiff <= $tolerance;
    }

    // Check if image has correct aspect ratio
    public function hasAspectRatio(float $ratio, float $tolerance = 0.1): bool
    {
        if (!$this->width || !$this->height) {
            return false;
        }

        $actualRatio = $this->width / $this->height;
        return abs($actualRatio - $ratio) <= $tolerance;
    }

    // Scope for active files
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for specific category
    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    // Scope for images only
    public function scopeImages($query)
    {
        return $query->where('mime_type', 'LIKE', 'image/%');
    }

    // Delete file when model is deleted
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($media) {
            if (Storage::disk($media->disk)->exists($media->path)) {
                Storage::disk($media->disk)->delete($media->path);
            }
        });
    }
}
