<?php

namespace App\Modules\Merchant\Order\Services;

use App\Entity\Enums\StatusEnum;
use App\Models\Address;
use App\Models\Order;

class MerchantOrderService
{
    private Order $model;

    public function __construct()
    {
        $this->model = new Order();
    }

    public function update($request, $id)
    {
        $model =  $this->model->findOrFail($id);

        Address::updateOrCreate(
            [ 'id' => $model->address_id ], array_only($request, [
                'name', 'contact', 'address_1', 'address_2', 'address_3', 'city', 'state', 'postal_code'
            ])
        );

        return $this->model->updateOrCreate(
            [ 'id' => $id ], array_only($request, [
                'additional_instructions', 'status', 'rating', 'comment'
            ])
        );

    }
}
