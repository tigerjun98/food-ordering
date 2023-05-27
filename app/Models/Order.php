<?php

namespace App\Models;

use App\Entity\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ModelTrait;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\TimestampFormat;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'orders';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public const RELATIONS = ['orderItems'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class,'order_id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => StatusEnum::getListing()[$this->status] ?? '-',
        );
    }

    public static function getStatusLists()
    {
        return StatusEnum::getOrderListing();
    }

    public static function Filter(){

        return [
//            'name'      => ['type' => 'text', 'label'=> 'name', 'default' => false],
            'status'    => ['type' => 'select', 'option' => Order::getStatusLists()],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('name')){
            $query->whereHas('address', function($q){
                $q->where('name', 'like', '%'.request()->name.'%');
            });
        }
        return $this->parentFilterTrait($query);
    }
}
