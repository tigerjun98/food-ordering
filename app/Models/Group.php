<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\ModelTrait;
use App\Traits\Models\FilterTrait;
use App\Traits\Models\ObserverTrait;
use App\Traits\Models\TimestampFormat;

class Group extends Model
{
    use HasFactory, SoftDeletes, ModelTrait;
    use FilterTrait {
        FilterTrait::scopeFilter as parentFilterTrait;
    }

    protected $table = 'groups';
    protected $guarded= []; // remove this replaces with {$fillable} to strict input col
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $casts = [
        'updated_at' => 'datetime',
    ];

    /**
     * Get all of the users for the Group
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'group', 'id')
            ->orderBy('created_at', 'desc');
    }
}
