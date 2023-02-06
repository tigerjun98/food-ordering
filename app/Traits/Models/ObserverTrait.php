<?php

namespace App\Traits\Models;

use Illuminate\Support\Facades\Schema;

trait ObserverTrait {

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            if(!$data->id) $data->id = abs( crc32( uniqid() ) );
        });
    }

}
