<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\GenderEnum;
use App\Entity\Enums\StatusEnum;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\HasSlug;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\SelectOption;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelPinyin\Facades\Pinyin;
use phpDocumentor\Reflection\Types\Integer;

class PrintTemplate extends Model
{
    use ModelTrait, HasFactory, SelectOption;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'print_templates';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            if(!$data->id) $data->id = abs( crc32( uniqid() ) );
        });
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_cn ? $this->name_cn.' '.$this->name_en : $this->name_en
        );
    }

    public static function Filter(){
        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'status'    => ['type' => 'select', 'label'=> 'status', 'option' => static::getStatusList()],
//            'type'      => [
//                'type' => 'select', 'label'=> 'type', 'option' => static::getTypeList(),
//                'multiple' => false
//            ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('full_name')){
            $query->where(function ($q) {
                $q->where('name_en', 'like', '%'.request()->full_name.'%')
                    ->orWhere('name_cn', 'like', '%'.request()->full_name.'%');
            });
        }

        return $this->searchAll(
            $this->parentFilterTrait($query), []
        );
    }
}
