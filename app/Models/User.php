<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
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
    use HasApiTokens, HasFactory, Notifiable, ObserverTrait, SoftDeletes;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

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

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en .' '. ( $this->name_cn ? '('.$this->name_cn.')' : '' )
        );
    }

    protected function stateName(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(static::getStatesList()[$this->state] ?? '')
        );
    }

    protected function genderExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(static::getGenderList()[$this->gender] ?? '')
        );
    }

    public static function getGenderList(): array
    {
        return Constants::getLists('gender');
    }

    public static function getStatesList(): array
    {
        return Constants::getLists('state');
    }

    public static function Filter(){

        /**
         * string $type: <text, select, date>;
         * string $label: // show to the user;
         * array $column: // if specific column required
         */

        return [
            'name_en'   => ['type' => 'text', 'label'=> 'Full name'],
            'nric'      => ['type' => 'text', 'label'=> 'NRIC' ],
            'phone'     => ['type' => 'text', 'label'=> 'phone' ],
            'email'     => ['type' => 'text', 'label'=> 'email' ],
            'state'     => ['type' => 'select', 'option' => self::getStatesList()],

            // 'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
        ];
    }

    public function scopeFilter($query)
    {
        return $this->searchAll(
            $this->parentFilterTrait($query), ['nric', 'name_en', 'name_cn', 'phone', 'email']
        );
    }
}
