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
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    use HasApiTokens, HasFactory, Notifiable, ObserverTrait, SelectOption, HasRoles;
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
}
