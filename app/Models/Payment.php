<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Payment extends Model
{
    protected $table = 'payments';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            $unique_id = strval(abs( crc32( uniqid() ) ));
            if(!$data->id) $data->id = $unique_id;

            if(!$data->status) $data->status = 0;
        });
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function orderDetail(){
        return $this->hasOne(OrderDetail::class, 'id','order_detail_id');
    }

    public static function getStatusList()
    {
        return [
            0 => 'unpaid',
            1 => 'paid',
            2 => 'expired',
            3 => 'failed',
            4 => 'error',
        ];
    }

    public static $rules = [
//        'order'        => 'required|min:3|max:50|alpha',
//        'last_name'         => 'required|min:4|max:50|regex:/^[\pL\s\-]+$/u',
//        'phone'     => 'required|numeric|digits_between:10,11',
//        'postcode'  => 'required|digits:5|numeric',
//        'address_1' => 'required|max:255',
//        'address_2' => 'max:255',
//        'state'     => 'required|exists:locations,state',
//        'area'      => 'required|exists:locations,area',
    ];
}
