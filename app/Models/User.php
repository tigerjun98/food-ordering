<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\CountryEnum;
use App\Entity\Enums\GenderEnum;
use App\Entity\Enums\StateEnum;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\TimestampFormat;
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
    use HasApiTokens, HasFactory, Notifiable, ObserverTrait, SoftDeletes, TimestampFormat;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'users';
    protected $guarded= []; // remove this replaces with $fillable to strict input col
    protected $primaryKey = 'id';
    protected $appends = ['full_name'];
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
        'deleted_at' => 'datetime',
    ];

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'user_id', 'id')
            ->orderBy('created_at', 'desc');
    }

    public function queues()
    {
        return $this->hasMany(Queue::class, 'user_id', 'id')
            ->orderBy('created_at', 'desc');
    }

    protected function dobWithAge(): Attribute
    {
        $age = get_age($this->dob);
        return Attribute::make(
            get: fn () => $age > 0 ? dateFormat($this->dob, 'd M, Y').' ('.get_age($this->dob).' '.trans('common.age').')' : '-'
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en .' '. ( $this->name_cn ? '('.$this->name_cn.')' : '' )
        );
    }

    protected function phoneFormat(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->phone ? '+'.$this->phone : ''
        );
    }

    protected function nricFormat(): Attribute
    {
        return Attribute::make(
            get: fn () => strlen($this->nric) == 12 ? nricFormat($this->nric) : $this->nric
        );
    }

    protected function nationalityExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(CountryEnum::getCountryList(false)[$this->nationality] ?? '')
        );
    }

    protected function stateName(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(static::getStatesList()[$this->state] ?? '')
        );
    }

    protected function fullAddress(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->address.', '.$this->postcode.' '.$this->area.', '.$this->state
        );
    }

    protected function genderExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(GenderEnum::getListing()[$this->gender] ?? '')
        );
    }

    public static function getStatesList(): array
    {
        return StateEnum::getListing();
    }

    public static function Filter(){

        /**
         * string $type: <text, select, date>;
         * string $label: // show to the user;
         * array $column: // if specific column required
         */

        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'nric'      => ['type' => 'text', 'label'=> 'nric_or_passport'],
            'phone'     => ['type' => 'text' ],
            'email'     => ['type' => 'text' ],
            'nationality'     => ['type' => 'select', 'option' => CountryEnum::getCountryList(false)],

            // 'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
        ];
    }

    public function scopeFilter($query)
    {
        request()->nric = str_replace('-', '', request()->nric);

        if(request()->filled('full_name')){
            $query->where(function ($q) {
                $q->where('name_en', 'like', '%'.request()->full_name.'%')
                    ->orWhere('name_cn', 'like', '%'.request()->full_name.'%');
            });
        }

        return $this->searchAll(
            $this->parentFilterTrait($query), ['nric', 'name_en', 'name_cn', 'phone', 'email']
        );
    }
}
