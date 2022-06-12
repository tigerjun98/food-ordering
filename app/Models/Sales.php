<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Sales extends Model
{
    public static function Filter(){
        return [
            'select_name' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
                'testing' => '123',
                '123' => '123',
                'Happu' => '123',
            ]],
            'select_name_1' => ['label'=> 'Created at', 'type' => 'select', 'option' => [
                'testing' => '123',
                '123' => '123',
                'Happu' => '123',
            ]],
            'product_name' => ['type' => 'text', 'label'=> 'Product Name' ],
            'date_name_2' => ['type' => 'date', 'label'=> 'created_at' ],
            'text_name' => ['type' => "date", 'label'=> 'created_at'],
        ];
    }
}
