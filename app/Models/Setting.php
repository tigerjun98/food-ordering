<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Setting extends Model
{
    protected $table = 'setting';
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
        });
    }

    public static $rules = [
        'value'     => 'required',
    ];

    public static function Filter(){
        return [];
    }

    public static function getValue($name){
        return static::where('name', $name)->value('value');
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
