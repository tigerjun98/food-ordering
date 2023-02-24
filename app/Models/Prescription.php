<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\HasSlug;
use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;

class Prescription extends Model
{
    use ModelTrait, HasFactory, ObserverTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'prescriptions';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';

    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }

    public function combinations()
    {
        return $this->hasMany(PrescriptionCombination::class, 'prescription_id', 'id')
            ->orderBy('sorting', 'asc');
    }

    public static function getDirectionList()
    {
        return [
            1 => trans('common.before_meal'),
            2 => trans('common.after_meal'),
            3 => trans('common.empty_stomach'),
            4 => trans('common.when_need'),
        ];
    }

    protected function metricExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->metric ? self::getMetricList()[$this->metric] : '',
        );
    }

    public static function getMetricList(): array
    {
        return [
            Medicine::SOLID => trans('common.pill'),
            Medicine::PARTICLE => trans('common.gram'),
            Medicine::FLUID => trans('common.ml'),
        ];
    }

    // continue Medicine 201, 202, 203
    public const EXTERNAL = 204;
    public const ACUPUNCTURE = 205;
    public const MASSAGE = 206;

    public static function getCategoryList(): array
    {
        $arr = [
            self::EXTERNAL => trans('common.external_use'), // 外用药
            self::ACUPUNCTURE => trans('common.acupuncture'), // 针灸
            self::MASSAGE => trans('common.massage'), // 推拿
        ];
        return Medicine::getCategoryList() + $arr;
    }

    public static function Filter(){
        return [
            'name_cn'     => ['type' => 'text', 'label' => 'Full name' ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }
}
