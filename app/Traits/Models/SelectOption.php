<?php

namespace App\Traits\Models;

use App\Entity\Enums\StatusEnum;
use Illuminate\Support\Facades\Schema;

trait SelectOption {

    public function scopeFilterOption($query)
    {
        $query->select("id", \DB::raw("( CASE WHEN name_cn != '' THEN CONCAT(name_cn,' ',name_en) ELSE name_en END) as name"))
            ->where(function ($q) {
                $q->where('name_en', 'LIKE', '%'. request()->get('search'). '%')
                    ->orWhere('name_cn', 'LIKE', '%'. request()->get('search'). '%');
            });

        return $query;
    }

    public function scopeFilterOptionNameNric($query)
    {
        $query->select("id", \DB::raw("( CASE WHEN name_cn != '' THEN CONCAT(name_cn,' ',name_en) ELSE name_en END) as name"), "nric")
            ->where(function ($q) {
                $q->where('name_en', 'LIKE', '%'. request()->get('search'). '%')
                    ->orWhere('name_cn', 'LIKE', '%'. request()->get('search'). '%')
                        ->orWhere('nric', 'LIKE', '%'. str_replace('-', '', request()->get('search')). '%');
            });

        return $query;
    }
}
