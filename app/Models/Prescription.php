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
    use SoftDeletes, ModelTrait, HasFactory, HasSlug;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'prescriptions';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public static function getDirectionList()
    {
        return [
            1 => trans('common.before_meal'),
            2 => trans('common.after_meal'),
            3 => trans('common.empty_stomach'),
            4 => trans('common.when_need'),
        ];
    }

    public static function getMetricList()
    {
        return [
            1 => trans('common.pill'),
            2 => trans('common.gram'),
            3 => trans('common.ml'),
        ];
    }

    public static function getCategoryList()
    {
        return [
            1 => trans('common.tablet_or_capsule'),
            2 => trans('common.granule_or_powder'),
            3 => trans('common.liquid'),
            4 => trans('common.external_use'),
            5 => trans('common.acupuncture'),
            6 => trans('common.massage'),
        ];
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
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
