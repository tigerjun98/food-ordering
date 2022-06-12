<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cart extends Model
{

//    protected $connection = 'mongodb';
    protected $table = 'cart';
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
            $data->id = $unique_id;
            if(!$data->quantity) $data->quantity = 1;
        });
    }

    public function product(){
        return $this->hasOne(Product::class, 'id','product_id');
    }

    public function productType(){
        return $this->hasOne(ProductType::class, 'id','product_type_id');
    }
}
