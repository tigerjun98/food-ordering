<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\HasSlug;
use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;
use Spatie\Permission\Models\Permission;

class Role extends Model
{
    public const ROOT = 'super-admin';

    use ModelTrait, HasFactory;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'roles';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en .' '. ( $this->name_cn ? '('.$this->name_cn.')' : '' )
        );
    }

    public static function Filter(){
        return [
            'name'     => ['type' => 'text', 'label' => 'name' ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }

    public function scopeExcludeSuperAdmin($query)
    {
        return $query->whereNot('name', Role::ROOT);
    }
}
