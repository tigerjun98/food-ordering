<?php

namespace App\Traits\Models;

use Illuminate\Support\Facades\Schema;

trait FilterTrait {

    private $query;
    private $column;
    private $relationship;
    private $item;

    public function filterTextType($query)
    {
        $strict = isset($this->item['strict']) && $this->item['strict'];
        return $query->where(
            $this->column,
            $strict
                ? $this->value
                : 'like', '%'.$this->value.'%'
        );
    }

    public function scopeFilter($query)
    {
        foreach (static::Filter() as $column => $item){

            if(!$this->validation($column)) continue;

            $this->column = $column;
            $this->value = request()->{$column};

            switch ($item['type']){
                case 'text':
                    $query = $this->filterTextType($query);
                    break;

                case 'select':
                    $query = $this->filterOptionType($query);
                    break;

                case 'date':
                    $query = $this->filterDateType($query);
                    break;
            }
        }

        return $query;
    }

    public function validation($column): bool
    {
        if( isset($item['default']) && !$item['default'] ) return true;
        if(!Schema::hasColumn(self::getTable(), $column)) return false; // column exist in the table
        if(!request()->filled($column)) return false; // not empty value

        return true;
    }

    public function handle($query)
    {
        foreach (self::Filter() as $column => $item){

            if(!$this->validation($column)) return true;

            $this->value = request()->input($column);
            $this->item = $item;
            $this->column = $column;

            $query = $this->handleFilterType($query);
        }

        return $query;
    }

    public function searchAll($query, array $columns = [])
    {
        if(request()->filled('search_all')){
            foreach ($columns as $column){
                $query->orWhere($column, 'like', '%'.request()->search_all.'%');
            }
        }

        return $query;
    }

    public function filterOptionType($query)
    {
        if (str_contains(request()->{$this->column}, ','))
            return $query->whereIn($this->column, explode(",",request()->{$this->column}));

        return $query->where($this->column, request()->{$this->column});
    }

    public function filterDateType($query)
    {
        if(request()->{$this->column.'_before'} != '' && request()->{$this->column.'_after'} != ''){
            return $query->whereDate($this->column,'>=',date("Y-m-d", strtotime(request()->input($this->column.'_after'))))
                ->whereDate($this->column,'<=',date("Y-m-d", strtotime(request()->input($this->column.'_before'))));
        }
    }



}
