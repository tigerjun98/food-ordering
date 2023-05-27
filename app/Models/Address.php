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

class Address extends Model
{
    use HasFactory, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'address';
    protected $guarded= [];
    protected $primaryKey = 'id';
    public $incrementing = false;

    public static function getStateLists(): array
    {
        return [
            101 => 'Johor',
            102 => 'Kedah',
            103 => 'Kelantan',
            104 => 'Melaka',
            105 => 'Negeri Sembilan',
            106 => 'Pahang',
            107 => 'Perak',
            108 => 'Perlis',
            109 => 'Pulau Pinang',
            110 => 'Sabah',
            111 => 'Sarawak',
            112 => 'Selangor',
            113 => 'Terengganu',
            114 => 'Kuala Lumpur',
            115 => 'Labuan',
            116 => 'Putrajaya',
        ];
    }

    protected function stateExplain(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => self::getStateLists()[$this->state] ?? '-',
        );
    }

    protected function address(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->address_1 .' '. $this->address_2 .' '. $this->address_3
        );
    }

    protected function fullAddress(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->address .', '. $this->zip .' '. $this->city .', '. str_replace("_"," ", ucfirst($this->state_explain))
        );
    }

}
