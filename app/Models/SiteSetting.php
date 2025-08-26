<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
        'group',
        'label',
        'description',
        'is_public',
        'sort_order',
    ];

    protected $casts = [
        'is_public' => 'boolean',
    ];

    // Setting types
    const TYPE_TEXT = 'text';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_NUMBER = 'number';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_JSON = 'json';
    const TYPE_EMAIL = 'email';
    const TYPE_URL = 'url';
    const TYPE_COLOR = 'color';

    // Setting groups
    const GROUP_GENERAL = 'general';
    const GROUP_CONTACT = 'contact';
    const GROUP_SOCIAL = 'social';
    const GROUP_SEO = 'seo';
    const GROUP_ANALYTICS = 'analytics';
    const GROUP_APPEARANCE = 'appearance';

    public static function getTypes(): array
    {
        return [
            self::TYPE_TEXT => 'Text',
            self::TYPE_TEXTAREA => 'Textarea',
            self::TYPE_NUMBER => 'Number',
            self::TYPE_BOOLEAN => 'Boolean',
            self::TYPE_JSON => 'JSON',
            self::TYPE_EMAIL => 'Email',
            self::TYPE_URL => 'URL',
            self::TYPE_COLOR => 'Color',
        ];
    }

    public static function getGroups(): array
    {
        return [
            self::GROUP_GENERAL => 'General',
            self::GROUP_CONTACT => 'Contact Information',
            self::GROUP_SOCIAL => 'Social Media',
            self::GROUP_SEO => 'SEO',
            self::GROUP_ANALYTICS => 'Analytics',
            self::GROUP_APPEARANCE => 'Appearance',
        ];
    }

    public function history(): MorphMany
    {
        return $this->morphMany(ContentHistory::class, 'contentable');
    }

    // Get typed value
    public function getTypedValueAttribute()
    {
        switch ($this->type) {
            case self::TYPE_BOOLEAN:
                return (bool) $this->value;
            case self::TYPE_NUMBER:
                return is_numeric($this->value) ? (float) $this->value : 0;
            case self::TYPE_JSON:
                return json_decode($this->value, true) ?: [];
            default:
                return $this->value;
        }
    }

    // Scope for public settings
    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    // Scope for specific group
    public function scopeGroup($query, string $group)
    {
        return $query->where('group', $group)->orderBy('sort_order');
    }

    // Clear cache when setting is updated
    protected static function boot()
    {
        parent::boot();

        static::saved(function ($setting) {
            Cache::forget('site_setting_' . $setting->key);
            Cache::forget('site_settings_' . $setting->group);
            Cache::forget('public_settings');
        });

        static::deleted(function ($setting) {
            Cache::forget('site_setting_' . $setting->key);
            Cache::forget('site_settings_' . $setting->group);
            Cache::forget('public_settings');
        });
    }

    // Helper method to get setting value by key
    public static function get(string $key, $default = null)
    {
        return Cache::remember('site_setting_' . $key, 3600, function () use ($key, $default) {
            $setting = static::where('key', $key)->first();
            return $setting ? $setting->typed_value : $default;
        });
    }

    // Helper method to set setting value
    public static function set(string $key, $value, string $type = 'text'): self
    {
        $setting = static::firstOrNew(['key' => $key]);
        
        if ($type === 'json' && is_array($value)) {
            $value = json_encode($value);
        } elseif ($type === 'boolean') {
            $value = $value ? '1' : '0';
        }
        
        $setting->value = $value;
        $setting->type = $type;
        $setting->save();
        
        return $setting;
    }

    // Get all public settings for frontend
    public static function getPublicSettings(): array
    {
        return Cache::remember('public_settings', 3600, function () {
            return static::public()->get()->pluck('typed_value', 'key')->toArray();
        });
    }
}
