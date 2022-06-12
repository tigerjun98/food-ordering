<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Jenssegers\Mongodb\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Validation\Rule;
use Laravel\Sanctum\HasApiTokens;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'admins';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    protected $guard = 'admin';
    /**
     *
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            $unique_id = strval(abs( crc32( uniqid() ) ));
            if(!$data->id) $data->id = abs( crc32( uniqid() ) );
        });
    }

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

    public static function Rules($id){
        return [
            'status'        => ['required', 'digits:1'],
            'name'          => ['required', 'alpha_dash', 'min:5', 'max:25', Rule::unique('users')->ignore($id, 'id')],
            'email'         => ['required', 'email', Rule::unique('users')->ignore($id, 'id')],
            'permissions'   => ['required', 'array', 'min:1'],
            'password'      => ['nullable', 'min:6'],
        ];
    }

    public function getStatusDescription()
    {
        return ucfirst(static::getStatusList()[$this->status] ?? '');
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

    public function scopeFilter($query, $request)
    {
//        dd($request->thing);

        foreach (static::Filter() as $column => $item){
            if($item['type'] == 'text'){
                if($request->{$column}) $query->where($column, 'like', '%' . $request->{$column} . '%');
            }
        }
//        if($request->status && $request->status != 'all') $query->where('status', $request->status);
//        if($request->role && $request->role != 'all') $query->where('role', $request->role);

        return $query;

    }
}
