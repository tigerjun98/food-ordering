<?php

namespace App\Traits\Models;

use Illuminate\Support\Facades\Schema;
use Overtrue\LaravelPinyin\Facades\Pinyin;

trait HasSlug {

    private static function getPinyin($str): string
    {
        return implode(' ', Pinyin::convert($str));
    }

    private static function getSlugFromChineseWord($str): string
    {
        return slugify(self::getPinyin($str));
    }

    private static function getSlug($data): string
    {
        if($data->name_en){
            return slugify($data->name_en);

        } elseif($data->name_cn){
            return self::getSlugFromChineseWord($data->name_cn);

        } else{
            return strval(new_id());
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($data) {
            if(!$data->id) $data->id = abs( crc32( uniqid() ) );
            if(!$data->slug) $data->slug = self::getSlug($data);
        });

        static::saving(function ($model) {
            if(!$model->name_en && $model->name_cn)
                $model->name_en = self::getPinyin($model->name_cn);
        });
    }

}
