<?php

namespace App\Models;

use App\Traits\Models\FilterTrait;
use App\Traits\ModelTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Validation\Rule;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

//    protected $connection = 'mongodb';
    protected $table = 'users';
    protected $guarded= []; // remove this replaces with $fillable to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function state(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst(static::getStatesList()[$value] ?? '')
        );
    }

    public static function getStatesList(): array
    {
        return [
            'johor'         => 'Johor',
            'kedah'         => 'Kedah',
            'kelantan'      => 'Kelantan',
            'kl'            => 'Kuala Lumpur',
            'labuan'        => 'Labuan',
            'melaka'        => 'Melaka',
            'pahang'        => 'Pahang',
            'penang'        => 'Penang',
            'perak'         => 'Perak',
            'perlis'        => 'Perlis',
            'putrajaya'     => 'Putrajaya',
            'sabah'         => 'Sabah',
            'sarawak'       => 'Sarawak',
            'selangor'      => 'Selangor',
            'sembilan'      => 'Sembilan',
            'terengganu'    => 'Terengganu',
        ];
    }

    public static function Filter(){
        return [
            'nric'      => ['type' => 'text', 'label'=> 'NRIC' ],
            'name'      => ['type' => 'text', 'label'=> 'Full name', 'col' => ['name_en', 'name_cn'] ],
            'phone'     => ['type' => 'text', 'label'=> 'phone' ],
            'email'     => ['type' => 'text', 'label'=> 'email' ],

//            'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
//            'select_name' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
//                'testing' => '123',
//                '123' => '123',
//                'Happu' => '123',
//            ]],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll($this->parentFilterTrait($query), ['id']);
    }
}
