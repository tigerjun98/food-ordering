<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;

class Medicine extends Model
{
    use SoftDeletes, ModelTrait, HasFactory;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'medicine';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

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


    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
    }

    public static function Filter(){
        return [
            'id'            => ['type' => 'text', 'label' => 'id' ],
            'full_name'     => ['type' => 'text', 'label' => 'Full name' ],
            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'created_at'    => ['type' => 'date', 'label' => 'created_at' ],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['nric', 'name_en', 'name_cn', 'phone', 'email']
        );
    }
}
