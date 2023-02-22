<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\HasSlug;
use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;

class Queue extends Model
{
    use ModelTrait, HasFactory;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public const WAITING = 101;
    public const SERVING = 102;
    public const PENDING = 103;
    public const EXPIRED = 104;

    public const CONSULTATION = 201;
    public const MEDICINE = 202;
    public const PAYMENT = 203;

    public $incrementing = false;
    protected $table = 'queues';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';

    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id', 'id');
    }

    public function doctor()
    {
        return $this->belongsTo(Admin::class,'doctor_id', 'id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

    public static function getTypeList()
    {
        return [
            self::CONSULTATION => trans('common.consultation'),
            self::MEDICINE => trans('common.medicine'),
            self::PAYMENT => trans('common.payment'),
        ];
    }

    protected function typeExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getTypeList()[$this->type] ?? __('common.unknown_status'),
        );
    }


    public static function getStatusList()
    {
        return [
            self::WAITING => trans('common.waiting'),
            self::SERVING => trans('common.serving'),
            self::PENDING => trans('common.pending'),
            self::EXPIRED => trans('common.expired'),
        ];
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => static::getStatusList()[$this->status] ?? __('common.unknown_status'),
        );
    }

    public function scopeWaiting($query)
    {
        return $query->where('status', self::WAITING);
    }

    public function scopePending($query)
    {
        return $query->where('status', self::PENDING);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('appointment_date', Carbon::now());
    }

    public function scopePriority($query)
    {
        return $query->orderBy('priority', 'desc');
    }

    public function scopeSort($query)
    {
        return $query->orderBy('priority', 'desc')->orderBy('sorting', 'asc');
    }

    public static function Filter(){
        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'type'      => ['label'=> 'type', 'type' => 'select', 'option' => static::getTypeList()],
            'status'    => ['label'=> 'status', 'type' => 'select', 'multiple' => false, 'option' => static::getStatusList()],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('full_name')){
            $query->whereHas('patient', function ($q) {
                $q->where(function ($q) {
                    $q->where('name_en', 'like', '%'.request()->full_name.'%')
                        ->orWhere('name_cn', 'like', '%'.request()->full_name.'%');
                });
            });
        }

        return $this->searchAll(
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }
}
