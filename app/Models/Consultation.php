<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Carbon\Carbon;
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
    use SoftDeletes, ModelTrait, HasFactory;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'consultations';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];

    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'ref_id', 'id')
            ->orderBy('created_at', 'desc');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'consultation_id', 'id')
            ->orderBy('sorting', 'asc');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
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

//    protected function specialists(): Attribute
//    {
//        // explode(',', $this->specialists);
//
//        return Attribute::make(
//            get: fn () => self::getExplainFromDb($this->specialists),
//        );
//    }

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
            'nric'          => ['type' => 'text', 'label' => 'nric' ],
            'created_at'    => ['type' => 'date', 'label'=> 'created_at' ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
        ];
    }

    public function scopeToday($query)
    {
        return $query->whereDate('created_at', Carbon::now());
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }
}
