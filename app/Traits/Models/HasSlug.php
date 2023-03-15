<?php

namespace App\Traits\Models;

use Illuminate\Support\Facades\Schema;
use Overtrue\LaravelPinyin\Facades\Pinyin;

trait HasSlug {

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            if(!$data->id) $data->id = abs( crc32( uniqid() ) );
        });

        static::saving(function ($model) {
            $pinyin = implode(' ', Pinyin::convert($model->name_cn));
            if($pinyin){
                $model->slug = !$model->name_en ? slugify($pinyin) : slugify($model->name_en);
            }
            if(!$model->name_en)
                $model->name_en = $pinyin;
        });
    }

}
