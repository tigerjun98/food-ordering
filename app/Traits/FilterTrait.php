<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;

trait FilterTrait {

    private $query;

    public function scopeFilter($query)
    {
        $this->query = $query;
        $this->handleFilter();
        return $this->query;
    }

    public function invalidColumn($col): bool
    {
       return !Schema::hasColumn(self::getTable(), $col);
    }

    public function searchAll($query, array $columns = [])
    {
        foreach ($columns as $column){
            $query->where($column, 'like', '%'.request()->search_all.'%');
        }
        return $query;
    }

    public function handleFilter()
    {
        foreach (self::Filter() as $column => $item){

            if($this->invalidColumn($column)){
                continue;
            }

            if($item['type'] == 'text')
                $this->filterTextType($column);

            if($item['type'] == 'select')
                $this->filterOptionType($column);

            if($item['type'] == 'date')
                $this->filterDateType($column);

        }
    }

    public function filterOptionType($column): void
    {
        if(request()->{$column} != ''){
            if (str_contains(request()->{$column}, ',')) {
                $this->query->whereIn($column, explode(",",request()->{$column}));
            } else{
                $this->query->where($column, request()->{$column});
            }
        }
    }

    public function filterDateType($column): void
    {
        if(request()->{$column.'_before'} != '' && request()->{$column.'_after'} != ''){
            $this->query->whereDate($column,'>=',date("Y-m-d", strtotime(request()->input($column.'_after'))))
                ->whereDate($column,'<=',date("Y-m-d", strtotime(request()->input($column.'_before'))));
        }
    }

    public function filterTextType($column): void
    {
        if($column == 'id' && request()->{$column} != ''){
            $this->query->where('id',request()->input($column));
        } elseif(request()->{$column} != ''){
            $this->query->whereHas('user', function ($q) use($column){
                $q->where($column, 'like', '%'.request()->input($column).'%');
            });
        }
    }

}
