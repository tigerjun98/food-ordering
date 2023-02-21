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
    use ModelTrait, HasFactory, ObserverTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public const WAITING = 1;
    public const SERVING = 2;
    public const PENDING = 3;
    public const EXPIRED = 4;

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

    public function scopeToday($query)
    {
        return $query->whereDate('appointment_date', Carbon::now());
    }

    public function scopeOrderBySorting($query)
    {
        return $query->orderBy('sorting', 'asc');
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
