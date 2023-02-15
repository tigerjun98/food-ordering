<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;

class Consultation extends Model
{
    use SoftDeletes, ModelTrait, HasFactory, ObserverTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'consultations';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'id', 'consultation_id');
    }

    public function patient()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public static function getSpecialistList()
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

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
    }

    protected function specialistsExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getExplainFromDb($this->specialists),
        );
    }

    protected function syndromesExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getExplainFromDb($this->syndromes),
        );
    }

    protected function diagnosesExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getExplainFromDb($this->diagnoses),
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
