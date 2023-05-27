<?php

namespace App\Models;

use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use ObserverTrait, ModelTrait;

    public $incrementing = false;
    protected $table = 'attachments';
    protected $guarded= []; // remove this replace with {$fillable} to strict input col
    protected $primaryKey = 'id';
    protected $casts = [
        'deleted_at' => 'datetime',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => route('attachment.show', $this->id),
        );
    }
}
