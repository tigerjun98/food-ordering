<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ModelTrait;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\TimestampFormat;
use Carbon\Carbon;

class OrderItem extends BaseModel
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'order_items';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public const RELATIONS = ['menuItems'];

    public function menuItem()
    {
        return $this->belongsTo(MenuItem::class,'menu_item_id', 'id');
    }

    public static function Filter(){
        return [
            'name_en'   => ['type' => 'text', 'label'=> 'name', 'default' => false],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->parentFilterTrait($query);
    }
}
