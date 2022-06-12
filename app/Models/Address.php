<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Address extends Model
{
    protected $table = 'address';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'unit_price'    => 'float',
        'order_price'   => 'float',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $appends = ['full_address'];

    public function getFullAddressAttribute()
    {
        return $this->address_1.' '.$this->address_2.', '.$this->postcode.' '.$this->area.', '.$this->state;
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            $unique_id = strval(abs( crc32( uniqid() ) ));
            $data->id = $unique_id;
        });
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public static $rules = [
        'first_name'        => 'required|min:3|max:50|alpha',
        'last_name'         => 'required|min:4|max:50|regex:/^[\pL\s\-]+$/u',
        'phone'     => 'required|numeric|digits_between:10,11',
        'postcode'  => 'required|digits:5|numeric',
        'address_1' => 'required|max:255',
        'address_2' => 'max:255',
        'state'     => 'required|exists:locations,state',
        'area'      => 'required|exists:locations,area',

    ];
}
