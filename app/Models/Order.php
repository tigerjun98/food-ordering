<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Order extends Model
{
    protected $table = 'orders';
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

    protected $appends = ['total_commission'];


    public function getTotalCommissionAttribute()
    {
        $data = Product::find($this->product_id);
        $qty = $this->quantity;
        $commission = 0;

        foreach ($data->commission as $key => $item){
            if($key == count($data->commission) - 1 && $qty > 0){
                $commission += $qty * ($this->unit_price * $item->percent / 100);
            }
            else{
                $count = $qty >= $item->max_sales ? $item->max_sales : $qty;
                $commission += $count * ($this->unit_price * $item->percent / 100);
                $qty -= $count;
            }
        }

        return $commission;
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            $unique_id = strval(abs( crc32( uniqid() ) ));
            $data->id = $unique_id;
        });
    }

    public function orderDetail(){
        return $this->hasOne(OrderDetail::class, 'id','order_detail_id');
    }

    public function product(){
        return $this->hasOne(Product::class, 'id','product_id');
    }

    public function productType(){
        return $this->hasOne(ProductType::class, 'id','product_type_id');
    }

    public static $rules = [
        'order_batch'       => 'required',
        'product_id'        => 'required|exists:products,id',
        'product_type_id'   => 'required|exists:product_type,id',
//        'order_detail_id'   => 'nullable|exists:order_detail,_id',
        'unit_price'        => 'required|regex:/^\d*(\.\d{1,2})?$/',
        'order_price'       => 'required|regex:/^\d*(\.\d{1,2})?$/',
        'quantity'          => 'required|numeric|between:1,99',
        'product_type_name' => 'required|min:1|max:255',
    ];

    public static function Filter(){
        return [
            'commission'    => ['label'=> 'commission', 'type' => 'select', 'option' => CommissionDetail::whereNotNull('name_en')->pluck('name_en', 'id')],
            'name'          => ['type' => 'text', 'label'=> 'username' ],
            'created_at'    => ['type' => 'date', 'label'=> 'sales_from_and_to' ],
        ];
    }

    public function scopeFilter($query, $request)
    {
//        dd($request->thing); if($item['type'] == 'select'){
//                if($request->{$column} && $request->{$column} != '')
//                    $query->where($column, $request->{$column});
//            }

        foreach (static::Filter() as $column => $item){

            if($item['type'] == 'select'){
                if($request->{$column} != ''){

                    if($column == 'commission'){
                        $commission = CommissionDetail::find($request->{$column});
                        if($commission){
                            $query->whereHas('orderDetail', function ($q) use($commission){
                                $q->where('created_at', '>=',date("Y-m-d H:i:00", strtotime($commission['start_at'])))
                                    ->where('created_at', '<=',date("Y-m-d H:i:00", strtotime($commission['end_at'])));
                            });
                        }
                    } else if (str_contains($request->{$column}, ',')) {
                        $query->whereIn($column, explode(",",$request->{$column}));
                    } else{
                        $query->where($column, $request->{$column});
                    }
                }
            }

            if($item['type'] == 'text'){
                if($column == 'name' && $request->{$column} != ''){
                    $query->whereHas('orderDetail.referral', function ($q) use($column){
                        $q->where('name', 'like', '%'.request()->input($column).'%');
                    });
                }
            }

            if($item['type'] == 'date'){
                if($request->{$column.'_before'} != '' && $request->{$column.'_after'} != ''){
                    $query->whereHas('orderDetail', function ($q) use($column){
                        $q->whereDate($column,'>=',date("Y-m-d", strtotime(request()->input($column.'_after'))))
                            ->whereDate($column,'<=',date("Y-m-d", strtotime(request()->input($column.'_before'))));
                    });
                }
            }
        }



        return $query;

    }
}
