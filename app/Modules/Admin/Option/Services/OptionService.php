<?php

namespace App\Modules\Admin\Option\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Medicine;
use App\Models\Option;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class OptionService
{
    private Option $model;

    public function __construct()
    {
        $this->model = new Option();
    }

    public function createIfNotExists(array $items, $type)
    {
        $arr = [];
        foreach ($items as $item){
            if(!$this->model->find($item)){
                $item = $this->store([
                    'type' =>  $type,
                    'name_'.app()->getLocale() => $item
                ]);
                $item = $item->id;
            }
            $arr[] = $item;
        }
        return $arr;
    }

    public function store(array $request): Option
    {
        $model = isset($request['id'])
            ? $this->model->find($request['id'])
            : null; // generate unique id

        $model = $model
            ? $model->update($request)
            : $this->model->create($request);

        return $model;
    }

}
