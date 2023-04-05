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
use App\Entity\Enums\ProcessStatusEnum;

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

    /**
     * Get the queue that owns the Appointment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function queue(): BelongsTo
    {
        return $this->belongsTo(Queue::class, 'queue_id', 'id');
    }

    public static function getStatusList(): array
    {
        return ProcessStatusEnum::getListing();
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(ProcessStatusEnum::getListing()[$this->status] ?? __('common.unknown_status'))
        );
    }

    public static function Filter()
    {
        return [
            // 'full_name' => ['type' => 'text', 'label' => 'full_name', 'default' => false],
            'status'    => ['type' => 'select', 'label' => 'status', 'option' => static::getStatusList(), 'multiple' => true],
        ];
    }

    public function scopeFilter($query)
    {
        // if(request()->filled('full_name')){
        //     $query->where(function ($q) {
        //         $q->where('name_en', 'like', '%'.request()->full_name.'%')
        //             ->orWhere('name_cn', 'like', '%'.request()->full_name.'%');
        //     });
        // }

        return $this->searchAll(
            $this->parentFilterTrait($query), []
        );
    }
}
