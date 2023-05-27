<?php

namespace App\Models;

use App\Constants;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\SelectOption;
use App\Traits\Models\TimestampFormat;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Merchant extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, ObserverTrait, TimestampFormat, SelectOption;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    public $incrementing = false;
    protected $table = 'merchants';
    protected $guarded= []; // remove this replaces with $fillable to strict input col
    protected $primaryKey = 'id';
    protected $guard = 'merchant';
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

    public const RELATIONS = [

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class,'ref_id', 'id');
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name .' '. $this->last_name
        );
    }

    public static function Filter(){

        /**
         * string $type: <text, select, date>;
         * string $label: // show to the user;
         * array $column: // if specific column required
         */

        return [
            'full_name'     => ['type' => 'text', 'label'=> 'full_name', 'default' => false],
            'contact'       => ['type' => 'text' ],
            'email'         => ['type' => 'text' ],
        ];
    }

    public function scopeFilter($query)
    {
        if(request()->filled('full_name')){
            $query->where(function ($q) {
                $q->where('first_name', 'like', '%'.request()->full_name.'%')
                    ->orWhere('last_name', 'like', '%'.request()->full_name.'%');
            });
        }

        return $this->parentFilterTrait($query);
    }
}
