<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\ConsultationEnum;
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

    public function consultation(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Consultation::class);
    }

    public function combinations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PrescriptionCombination::class, 'prescription_id', 'id')
            ->orderBy('sorting', 'asc');
    }

    protected function direction(): Attribute
    {
        return Attribute::make(
            get: fn (string|null $direction) => array_flip(array_map('intval', explode(',', ($direction ?? '')))),
        );
    }

    protected function directionExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getDirectionList()[$this->direction] ?? ''
        );
    }

    public static function getDirectionList(): array
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
            get: fn () => self::getMetricList()[$this->metric] ?? ''
        );
    }

    public static function getMetricList(): array
    {
        return [
            ConsultationEnum::TABLET_OR_CAPSULE => trans('common.pill'),
            ConsultationEnum::GRANULE_OR_POWDER => trans('common.gram'),
            ConsultationEnum::FLUID => trans('common.ml'),
        ];
    }

    protected function categoryExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getCategoryList()[$this->category] ?? '',
        );
    }

    public static function getCategoryList(): array
    {
        return ConsultationEnum::getMedicineListing() + ConsultationEnum::getPrescriptionListing();
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
