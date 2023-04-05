<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
    use HasFactory, SoftDeletes, ModelTrait, HasSlug;
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

    public const USER = 101;
    public const ADMIN = 102;

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en . ( $this->name_cn ? ' ('.$this->name_cn.')' : '' )
        );
    }

    public static function getTypeList(): array
    {
        return [
            self::USER => ucfirst(trans('common.patients')),
            self::ADMIN => ucfirst(trans('common.admins')),
        ];
    }

    protected function typeExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(static::getTypeList()[$this->type] ?? '')
        );

    }

    public static function getStatusList(): array
    {
        return StatusEnum::getListing();
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(StatusEnum::getListing()[$this->status] ?? '')
        );
    }

    public function scopeActive($query)
    {
        return $query->where('status', StatusEnum::ACTIVE);
    }

    public function scopeUser($query)
    {
        return $query->where('type', Group::USER);
    }

    public function scopeAdmin($query)
    {
        return $query->where('type', Group::ADMIN);
    }

    public static function Filter()
    {
        return [
            'full_name' => ['type' => 'text', 'label' => 'full_name', 'default' => false],
            'status'    => ['type' => 'select', 'label' => 'status', 'option' => static::getStatusList()],
            'type'      => ['type' => 'select', 'label' => 'type', 'option' => static::getTypeList()],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('full_name')){
            $query->where(function ($q) {
                $q->where('name_en', 'like', '%'.request()->full_name.'%')
                    ->orWhere('name_cn', 'like', '%'.request()->full_name.'%');
            });
        }

        return $this->searchAll(
            $this->parentFilterTrait($query), []
        );
    }
}
