<?php

namespace App\Models;

use App\Traits\Models\ObserverTrait;
use App\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

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
        $exists = $this->path && \Storage::disk('s3')->exists($this->path);
        return Attribute::make(
            get: fn ($value) => $exists ? \Storage::disk('s3')->url($this->path) : self::getImgNotFoundSrc(),
        );
    }
}
