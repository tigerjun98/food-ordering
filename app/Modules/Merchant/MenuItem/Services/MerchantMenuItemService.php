<?php

namespace App\Modules\Merchant\MenuItem\Services;

use App\Models\MenuItem;

class MerchantMenuItemService
{
    private MenuItem $model;

    public function __construct()
    {
        $this->model = new MenuItem();
    }

    public function store(array $request): MenuItem
    {
        return $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
    }
    public function canDelete(MenuItem $model): bool
    {
        $exists = false;

        foreach (MenuItem::RELATIONS as $relation){
            $exists = $model->{$relation}()->first();
            if($exists) break;
        }

        return ! $exists;
    }

    public function delete(MenuItem $model)
    {
        $model->forceDelete();
    }
}
