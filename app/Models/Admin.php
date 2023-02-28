<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\GenderEnum;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\SelectOption;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, ObserverTrait, SelectOption, HasRoles;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }


    public $incrementing = false;
    protected $table = 'admins';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $guard = 'admin';
    protected $guard_name = 'admin'; // for spatie role & permission

    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillablse = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
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

    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id', 'id');
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->name_en .' '. ( $this->name_cn ? '('.$this->name_cn.')' : '' )
        );
    }

    protected function genderExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(GenderEnum::getListing()[$this->gender] ?? '')
        );
    }
    public static function getPermissionsLists()
    {
        $lang = app()->getLocale();
        $arr = @include base_path('lang/'.$lang.'/permission.php');

        if (! $arr || count($arr) < 0) {
            return [];
        }

        return $arr;
    }

    public function getPermissionsInStr()
    {
        $arr = "";
        foreach (explode(",", $this->permissions) as $key => $item){
            $arr .= "'".$item."',";
        }
        return $arr;
    }


    public static function getStatusList()
    {
        return [
            0 => 'active',
            1 => 'inactive',
            2 => 'block',
            3 => 'banned',
        ];
    }

    public static function Filter(){
        return [
            'name'      => ['type' => 'text', 'label'=> 'username'],
            'email'     => ['type' => 'text', 'label'=> 'email' ],
            'phone'     => ['type' => 'text', 'label'=> 'phone' ],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('search_all'))
            $query = $this->searchAll($query, ['nric', 'name_en', 'name_cn', 'phone', 'email']);

        return $this->parentFilterTrait($query);
    }
}
