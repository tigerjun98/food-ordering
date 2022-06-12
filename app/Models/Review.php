<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
//    use SoftDeletes;

    protected $table = 'reviews';
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
            $data->id = strval(abs( crc32( uniqid() ) ));
        });
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function orderDetail(){
        return $this->hasOne(OrderDetail::class, 'id','order_detail_id');
    }

    public function product(){
        return $this->hasOne(Product::class, 'id','product_id');
    }

    public static $rules = [
        'rating'            => 'integer',
        'comment'           => 'min:5|max:255',
    ];

    public static function Filter(){
        return [];
    }

    public function scopeFilter($query, $request)
    {
//        dd($request->thing);

        if($request->product_name) $query->where('product_name', 'like', '%' . $request->product_name . '%');
//        if($request->status && $request->status != 'all') $query->where('status', $request->status);
//        if($request->role && $request->role != 'all') $query->where('role', $request->role);

        return $query;

    }
}
