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

class MenuItem extends BaseModel
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'menu_items';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public const RELATIONS = [];

    public function attachments()
    {
        return $this->hasMany(Attachment::class,'ref_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
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
