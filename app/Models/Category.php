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

class Category extends Model
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'categories';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;
    public const RELATIONS = ['menuItems', 'merchants'];

    public function menuItems()
    {
        return $this->hasMany(MenuItem::class,'category_id', 'id');
    }

    public function merchants()
    {
        return $this->hasMany(Merchant::class,'category_id', 'id');
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

    public function scopeFilterOption($query)
    {
        $query->select("id", \DB::raw("name_en as name"))
            ->where('name_en', 'LIKE', '%'. request()->get('search'). '%');

        return $query;
    }
}
