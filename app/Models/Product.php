<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rule;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $casts = [
        'status' => 'integer',
        'product_images' => 'array'
    ];

    protected $appends = ['rating', 'total_review'];


    public function getRatingAttribute()
    {
        return intval($this->hasMany(Review::class, 'product_id','id')
            ->where('status', 1)
            ->average('rating'));
    }

    public function getTotalReviewAttribute()
    {
        return intval($this->hasMany(Review::class, 'product_id','id')
            ->where('status', 1)
            ->count());
    }

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
//            $data->_id = $data->product_id;
            $data->product_rating = 5;
            $data->product_variant_name_en = 'variant';
//            $data->product_id = $unique_id;
        });
    }

    public function reviews(){
        return $this->hasMany(Review::class, 'product_id','id')->where('status', 1);
    }

    public function productType(){
        return $this->hasMany(ProductType::class, 'product_id','id');
    }

    public function commission(){
        return $this->hasMany(Commission::class, 'product_id','id')->orderBy('sorting', 'asc');
    }

    public static function Rules($id){
        return [
            'product_name'          => 'required|'.Rule::unique('products')->ignore($id, 'id'),
            'product_name_en'       => 'required|min:1|max:255',
            'product_short_desc_en' => 'required|min:1|max:255',
            'product_variant_name_en' => 'required|min:1|max:255',
            'product_name_cn'       => 'required|min:1|max:255',
            'product_short_desc_cn' => 'required|min:1|max:255',
            'product_variant_name_cn' => 'required|min:1|max:255',
            'status'                => 'required|numeric|digits:1',
            'price_0'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'price_1'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
        ];
    }

    public static $rules = [
        'product_name'          => 'required|unique:products',
        'product_name_en'       => 'required|min:1|max:255',
        'product_short_desc_en' => 'required|min:1|max:255',
        'product_variant_name_en' => 'required|min:1|max:255',
        'product_name_cn'       => 'required|min:1|max:255',
        'product_short_desc_cn' => 'required|min:1|max:255',
        'product_variant_name_cn' => 'required|min:1|max:255',
        'status'                => 'required|numeric|digits:1',
        'price_0'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
        'price_1'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
//        'price_2'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
//        'price_3'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
//        'price_4'               => 'required|regex:/^\d*(\.\d{1,2})?$/',
    ];

    public function getStatusDescription()
    {
        return ucfirst(static::getStatusList()[$this->status] ?? '');
    }

    public static function getStatusList()
    {
        return [
            0 => 'active',
            1 => 'inactive',
            2 => 'expired',
        ];
    }

    public static function getProductList()
    {
        return static::where('status', 0)->get();
    }

    public static function getProductPrice($productTypeID, $username=null)
    {
//        $tier = 4;
//        if($username){
//            $tier = User::where('name', $username)->value('tier');
//        }
        $tier = 1;
        $productID = ProductType::find($productTypeID)['product_id'];

        return static::where('id', $productID)->value('price_'.$tier);
    }

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
