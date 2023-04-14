<?php

namespace App\Models;

use App\Constants;
use App\Entity\Enums\GenderEnum;
use App\Entity\Enums\StatusEnum;
use App\Modules\Admin\Group\Services\GroupService;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\SelectOption;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
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
    protected $guard = 'admin';

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
        'deleted_at' => 'datetime',
    ];

    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id', 'id');
    }

    /**
     * Get the group that owns the Admin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function group(): HasOne
    {
        return $this->hasOne(Group::class, 'id', 'group_id');
    }

    public function isRoot(): bool
    {
        return $this->hasRole(\App\Models\Role::ROOT);
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
        return StatusEnum::getListing();
    }

    protected function statusExplain(): Attribute
    {
        return Attribute::make(
            get: fn () => ucfirst(StatusEnum::getListing()[$this->status] ?? '')
        );
    }

    public static function getRolesList(): array
    {
        return \Spatie\Permission\Models\Role::all()
            ->whereNotIn('name', [\App\Models\Role::ROOT])
            ->pluck('name_en','id')
            ->toArray();
    }

    public static function Filter(){
        return [
            'full_name' => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'email'     => ['type' => 'text', 'label'=> 'email' ],
            'phone'     => ['type' => 'text', 'label'=> 'phone' ],
            'roles'     => ['label'=> 'role', 'type' => 'select', 'option' => static::getRolesList(), 'default' => false],
            'status'    => ['label'=> 'status', 'type' => 'select', 'option' => static::getStatusList()],
            'groups'    => ['type' => 'select', 'option' => (new GroupService())->getSelectOption(Group::ADMIN), 'default' => false],
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

        if(request()->filled('roles')){
            $query->whereHas('roles', function($q){
                $q->whereIn('id', explode(",",request()->roles));
            });
        }

        if(request()->filled('groups')){
            $query->whereHas('group', function($q){
                $q->whereIn('id', explode(",",request()->groups));
            });
        }

        if(request()->filled('search_all'))
            $query = $this->searchAll($query, ['nric', 'name_en', 'name_cn', 'phone', 'email']);

        return $this->parentFilterTrait($query);
    }

    public function scopeExcludeSuperAdmin($query)
    {
        return $query->whereHas('roles', function ($query) {
            $query->whereNot('name', \App\Models\Role::ROOT);
        });
    }
}
