<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductType extends Model
{
    use SoftDeletes;

    protected $table = 'product_type';
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
        'product_type_name'     => 'required|min:1|max:255',
        'product_type_label'    => 'required|min:1|max:3',
//        'product_name_cn' => 'required|min:1|max:255',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id','product_id');
    }

    public static function Filter(){
        return [
            'select_name' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
                'testing' => '123',
                '123' => '123',
                'Happu' => '123',
            ]],
            'select_name_1' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
                'testing' => '123',
                '123' => '123',
                'Happu' => '123',
            ]],
            'product_name' => ['type' => 'text', 'label'=> 'Product Name' ],
            'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
            'text_name' => ['type' => "date", 'label'=> 'created_at'],
        ];
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
