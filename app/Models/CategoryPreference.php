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

class CategoryPreference extends BaseModel
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'category_preference';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
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
