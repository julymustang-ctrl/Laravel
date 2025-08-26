<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ContentHistory extends Model
{
    use HasFactory;

    protected $table = 'content_history';

    protected $fillable = [
        'contentable_type',
        'contentable_id',
        'old_data',
        'new_data',
        'action',
        'reason',
        'admin_user_id',
    ];

    protected $casts = [
        'old_data' => 'array',
        'new_data' => 'array',
    ];

    // Action constants
    const ACTION_CREATED = 'created';
    const ACTION_UPDATED = 'updated';
    const ACTION_DELETED = 'deleted';
    const ACTION_RESTORED = 'restored';

    public function contentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function adminUser(): BelongsTo
    {
        return $this->belongsTo(AdminUser::class);
    }

    // Get formatted action name
    public function getFormattedActionAttribute(): string
    {
        return match ($this->action) {
            self::ACTION_CREATED => 'Created',
            self::ACTION_UPDATED => 'Updated',
            self::ACTION_DELETED => 'Deleted',
            self::ACTION_RESTORED => 'Restored',
            default => ucfirst($this->action),
        };
    }

    // Get changes summary
    public function getChangesSummaryAttribute(): array
    {
        if (!$this->old_data || !$this->new_data) {
            return [];
        }

        $changes = [];
        $oldData = $this->old_data;
        $newData = $this->new_data;

        foreach ($newData as $key => $newValue) {
            $oldValue = $oldData[$key] ?? null;
            
            if ($oldValue !== $newValue) {
                $changes[$key] = [
                    'old' => $oldValue,
                    'new' => $newValue,
                ];
            }
        }

        return $changes;
    }

    // Check if this history entry can be used to restore
    public function canRestore(): bool
    {
        return in_array($this->action, [self::ACTION_UPDATED, self::ACTION_DELETED]) 
               && $this->old_data !== null;
    }

    // Restore content to this state
    public function restore(): bool
    {
        if (!$this->canRestore() || !$this->contentable) {
            return false;
        }

        try {
            // Update the content with old data
            $this->contentable->update($this->old_data);
            
            // Create a new history entry for the restore action
            static::create([
                'contentable_type' => $this->contentable_type,
                'contentable_id' => $this->contentable_id,
                'old_data' => $this->new_data,
                'new_data' => $this->old_data,
                'action' => self::ACTION_RESTORED,
                'reason' => 'Restored from history entry #' . $this->id,
                'admin_user_id' => auth('admin')->id(),
            ]);
            
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    // Track changes for a model
    public static function trackChange(
        Model $model, 
        string $action,
        ?array $oldData = null, 
        ?array $newData = null, 
        ?string $reason = null
    ): self {
        return static::create([
            'contentable_type' => get_class($model),
            'contentable_id' => $model->id,
            'old_data' => $oldData,
            'new_data' => $newData,
            'action' => $action,
            'reason' => $reason,
            'admin_user_id' => auth('admin')->id(),
        ]);
    }

    // Cleanup old history entries (keep last 50 per content)
    public static function cleanup(): void
    {
        $groupedHistory = static::select('contentable_type', 'contentable_id')
            ->distinct()
            ->get();

        foreach ($groupedHistory as $group) {
            $oldEntries = static::where('contentable_type', $group->contentable_type)
                ->where('contentable_id', $group->contentable_id)
                ->orderBy('created_at', 'desc')
                ->skip(50)
                ->pluck('id');

            if ($oldEntries->isNotEmpty()) {
                static::whereIn('id', $oldEntries)->delete();
            }
        }
    }
}
