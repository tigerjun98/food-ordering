<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ModelTrait;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\TimestampFormat;
use App\Entity\Enums\StatusEnum;

class Group extends Model
{
    use HasFactory, SoftDeletes, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'groups';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $casts = [
        'updated_at' => 'datetime',
    ];

    public const USERS = 001;
    public const ADMINS = 002;

    /**
     * Get all of the users for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'group', 'id')
            ->orderBy('created_at', 'desc');
    }

    public static function getTypeList(): array
    {
        return [
            self::USERS => trans('common.users'),
            self::ADMINS => trans('common.admins'),
        ];
    }

    protected function typeExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getTypeList()[$this->type] ?? trans('common.unknown_type'),
        );

    }

    public static function getStatusList(): array
    {
        return StatusEnum::getListing();
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(self::getStatusList()[$this->status] ?? '')
        );
    }
}
