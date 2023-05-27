<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    public static function booting()
    {
        static::creating(function($data) {
            if(!$data->id) $data->id = new_id();
        });

        static::bootTraits();
    }

}
