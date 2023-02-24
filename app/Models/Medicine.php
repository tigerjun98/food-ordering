<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\HasSlug;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\SelectOption;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;

class Medicine extends Model
{
    use SoftDeletes, ModelTrait, HasFactory, SelectOption, HasSlug;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'medicines';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public const TABLET = 101;
    public const CAPSULE = 102;
    public const GRANULE = 103;
    public const POWDER = 104;
    public const LIQUID = 105;

    public const SOLID = 201;
    public const PARTICLE = 202;
    public const FLUID = 203;
    // 204, 205, 206 Reserve by Prescription

    public function prescriptionCombinations()
    {
        return $this->hasMany(PrescriptionCombination::class, 'medicine_id', 'id');
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_cn ? $this->name_cn.' '.$this->name_en : $this->name_en
        );
    }

    protected function typeExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => isset(self::getTypeList()[$this->type])
                ? self::getTypeList()[$this->type]
                : ''
        );
    }

    public static function getCategoryList(): array
    {
        return [
            self::SOLID => trans('common.tablet_or_capsule'),
            self::PARTICLE => trans('common.granule_or_powder'),
            self::FLUID => trans('common.liquid'),
//            self::EXTERNAL => trans('common.external_use'), // 外用药
//            self::ACUPUNCTURE => trans('common.acupuncture'), // 针灸
//            self::MASSAGE => trans('common.massage'), // 推拿
        ];
    }

    protected function categoryExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getCategoryList()[$this->category] ?? __('common.unknown_status'),
        );
    }

    public static function getTypeList(): array
    {
        return [
            self::TABLET => trans('common.tablet'),
            self::CAPSULE => trans('common.capsule'),
            self::GRANULE=> trans('common.granule'),
            self::POWDER => trans('common.powder'),
            self::LIQUID => trans('common.liquid'),
        ];
    }

    public static function getVolumeMetricUnitList()
    {
        return [
            2 => trans('common.ml'),
            3 => trans('common.tablet'),
            4 => trans('common.gram'),
        ];
    }

    public static function getMetricUnitList()
    {
        return [
            1 => trans('common.bottle'),
            5 => trans('common.unit'),
        ];
    }

    public static function getStatusList()
    {
        return [
            1 => trans('common.bottle'),
            5 => trans('common.unit'),
        ];
    }

    public static function Filter(){
        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'type'      => ['type' => 'select', 'label'=> 'type', 'option' => static::getTypeList()],
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
            $this->parentFilterTrait($query), ['name_en', 'name_cn', 'sku']
        );
    }
}
