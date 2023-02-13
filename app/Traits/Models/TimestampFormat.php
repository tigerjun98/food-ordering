<?php

namespace App\Traits\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Schema;

trait TimestampFormat {

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => dateFormat($value, 'r')
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => dateFormat($value, 'r')
        );
    }
}
