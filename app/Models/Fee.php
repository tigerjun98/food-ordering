<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\ConsultationEnum;
use App\Entity\Enums\StatusEnum;
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

class Fee extends Model
{
    use SoftDeletes, ModelTrait, HasFactory, ObserverTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'fees';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $casts = [
        'deleted_at' => 'datetime',
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en .' '. ( $this->name_cn ? '('.$this->name_cn.')' : '' )
        );
    }

    public static function getCategoryList(): array
    {
        return ConsultationEnum::getListing();
    }

    protected function categoryExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getCategoryList()[$this->category] ?? '',
        );
    }

    public static function getStatusList(): array
    {
        return StatusEnum::getListing();
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => self::getStatusList()[$this->status] ?? '',
        );
    }

    public static function Filter(){
        return [
            'name_cn'     => ['type' => 'text', 'label' => 'Full name' ],
//            'status'        => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['name_en', 'name_cn']
        );
    }
}