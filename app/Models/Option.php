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

class Option extends Model
{
    use SoftDeletes, ModelTrait, HasFactory, HasSlug, SelectOption;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'options';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    public $incrementing = false;

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

    public static function getTypeList()
    {
        return [
            'diagnose'      => trans('common.diagnose'),
            'syndrome'      => trans('common.syndrome'),
            'specialist'    => trans('common.specialist'),
        ];
    }

    public static function Filter(){
        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
//            'type'      => [
//                'type' => 'select', 'label'=> 'type', 'option' => static::getTypeList(),
//                'multiple' => false
//            ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
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
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }
}
