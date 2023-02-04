<?php

namespace App\Traits\Models;

use Illuminate\Support\Facades\Schema;

trait FilterTrait {

    private $query;
    private $column;

    public function scopeFilter($query)
    {
        $this->column = '';
        $this->query = $query;
        $this->handle();
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

    public function handleFilterType($column, $item)
    {
        if($this->invalidColumn($column)){
            return true;
        }

        $this->column = $column;

        if($item['type'] == 'text')
            $this->filterTextType($column);

        if($item['type'] == 'select')
            $this->filterOptionType($column);

        if($item['type'] == 'date')
            $this->filterDateType($column);
    }

    public function setColumn()
    {

    }

    public function handle()
    {
        foreach (self::Filter() as $column => $item){

            if(isset($item['col'])){
                foreach ($item['col'] as $col){
                    $this->handleFilterType($col, $item);
                }
            } else{
                $this->handleFilterType($column, $item);
            }

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

    public function filterTextType($column, $strict): void
    {
        if($strict && request()->{$column} != ''){
            $this->query->where('id',request()->input($column));

        } else{
            $this->query->whereHas('user', function ($q) use($column){
                $q->where($column, 'like', '%'.request()->input($column).'%');
            });
        }
    }

}
