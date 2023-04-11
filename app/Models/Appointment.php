<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ModelTrait;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\TimestampFormat;

class Appointment extends Model
{
    use HasFactory, SoftDeletes, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'appointments';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $casts = [
        'updated_at' => 'datetime',
    ];

    public const PENDING   = 101;
    public const QUEUED    = 102;
    public const REJECTED  = 103;
    public const CANCELLED = 104;
    public const COMPLETED = 105;

    /**
     * Get the patient that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the doctor that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public static function getStatusList(): array
    {
        return [
            self::PENDING => trans('common.pending'),
            self::QUEUED => trans('common.queued'),
            self::REJECTED => trans('common.rejected'),
            self::CANCELLED => trans('common.cancelled'),
            self::COMPLETED => trans('common.completed'),
        ];
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(static::getStatusList()[$this->status] ?? __('common.unknown_status'))
        );

    }

    public static function getStatusClass(): array
    {
        return [
            self::PENDING => 'warning',
            self::QUEUED => 'info',
            self::REJECTED => 'danger',
            self::CANCELLED => 'light',
            self::COMPLETED => 'success',
        ];
    }

    protected function classExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => strtolower(static::getStatusClass()[$this->status] ?? '')
        );
    }

    public static function Filter()
    {
        return [
            'status' => ['type' => 'select', 'label' => 'status', 'option' => static::getStatusList(), 'multiple' => true],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), []
        );
    }
}
