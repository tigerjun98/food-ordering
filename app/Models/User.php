<?php

namespace App\Models;

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

//    protected $connection = 'mongodb';
    protected $table = 'users';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    // protected $appends = ['full_name'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            if(!$data->id) $data->id = strval(abs( crc32( uniqid() ) ));
            if(!$data->status) $data->status = 0;
        });
    }

    public function setStatusExplainAttribute($value)
    {
        $this->attributes['status_explain'] = static::Status($value);
    }

//    protected $fillablse = [
//        'name',
//        'email',
//        'password',
//    ];

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

    public static $rules = [
        'id'                => 'unique:users,id',
        'referral_id'       => 'required|exists:users,id',
        'first_name'        => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
        'last_name'         => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
        'name'              => 'alpha_dash|min:4|max:50|unique:users,name',
        'email'             => 'required|email|unique:users,email',
        'phone'             => 'nullable|digits_between:10,11|unique:users,phone',
        'password'          => 'required|min:6',
    ];

    public static function Rules($id){
        return [
            'status'        => ['required', 'digits:1'],
            'name'          => ['required', 'alpha_dash', 'min:4', 'max:25', Rule::unique('users')->ignore($id, 'id')],
            'email'         => ['required', 'email', Rule::unique('users')->ignore($id, 'id')],
            'first_name'    => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
            'last_name'     => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
        ];
    }


    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name .' '. $this->last_name
        );
    }


    public function getStatusDescription()
    {
        return ucfirst(static::getStatusList()[$this->status] ?? '');
    }

    public function getTierDescription()
    {
        return ucfirst(static::getTierList()[$this->tier] ?? '');
    }

    public function referral(){
        return $this->hasOne(User::class, 'id','referral_id');
    }

    public function deposit(){
        return $this->hasMany(Transaction::class, 'user_id','id')
            ->where('type', 0)
            ->where('status', 0);
    }

    public function getTotalDepositAttribute()
    {
        return $this->deposit->sum('amount');
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

    public static function getTierList()
    {
        return [
            1 => 'Level 1',
            2 => 'Level 2',
            3 => 'Level 3',
            4 => 'Level 4',
        ];
    }

    public static function Filter(){
        return [
            'name'      => ['type' => 'text', 'label'=> 'username' ],
            'email'     => ['type' => 'text', 'label'=> 'email' ],
            'phone'     => ['type' => 'text', 'label'=> 'phone' ],
            'referral'  => ['type' => 'text', 'label'=> 'referral_username' ],

//            'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
//            'select_name' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
//                'testing' => '123',
//                '123' => '123',
//                'Happu' => '123',
//            ]],
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
