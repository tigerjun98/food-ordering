<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $appends = ['event_date'];

    public function getEventDateAttribute()
    {
        return date("Y/m/d H:i", strtotime($this->start_at)).'-'.date("Y/m/d H:i", strtotime($this->end_at));
    }
//    protected $casts = [
//        'unit_price'    => 'float',
//        'order_price'   => 'float',
//    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
//            $unique_id = strval(abs( crc32( uniqid() ) ));
//            $data->id = $unique_id;
        });
    }

    public static $rules = [
        'label_en'      => 'required|min:3|max:20',
        'label_cn'      => 'required|min:3|max:20',
        'title_en'      => 'required|min:3|max:50',
        'title_cn'      => 'required|min:3|max:50',
        'desc_en'       => 'required',
        'desc_cn'       => 'required',
        'status'        => 'required|integer',
        'url'           => 'nullable|url',
        'start_at'      => 'required|date_format:Y/m/d H:i',
        'end_at'        => 'required|date_format:Y/m/d H:i|after_or_equal:start_at',
    ];

    public function getStatusDescription()
    {
        return static::getStatusList()[$this->status] ?? '';
    }

    public static function getStatusList()
    {
        return [
            0 => 'active',
            1 => 'inactive',
            2 => 'expired',
        ];
    }

    public static function getBadgeList($status)
    {
        $arr = [
            0 => 'success',
            1 => 'light',
            2 => 'warning',
        ];

        return $arr[$status];
    }

    public static function Filter(){
        return [];
    }

    public function scopeFilter($query, $request)
    {
//        if($request->product_name) $query->where('product_name', 'like', '%' . $request->product_name . '%');
//        if($request->status && $request->status != 'all') $query->where('status', $request->status);
//        if($request->role && $request->role != 'all') $query->where('role', $request->role);

        return $query;

    }
}
