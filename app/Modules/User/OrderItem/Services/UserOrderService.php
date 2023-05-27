<?php

namespace App\Modules\User\OrderItem\Services;

use App\Entity\Enums\StatusEnum;
use App\Models\Address;
use App\Models\Admin;
use App\Models\Attachment;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use function PHPUnit\Framework\throwException;

class UserOrderService
{
    private Order $model;

    public function __construct()
    {
        $this->model = new Order();
    }

    public function store($request): Order
    {
        $address = Address::updateOrCreate(
            [ 'id' => new_id() ], array_except($request, ['additional_instructions', 'id'])
        );

        $item = OrderItem::where('order_id', $request['id'])->get();
        return $this->model->updateOrCreate(
            [ 'id' => $request['id'] ], [
                'address_id'    => $address->id,
                'user_id'       => $request['user_id'],
                'additional_instructions' => $request['additional_instructions'],
                'status'        => StatusEnum::PENDING,
                'merchant_id'   => $item[0]->menuItem->merchant->id,
                'price'         => $item->sum('total')
            ]
        );
    }

    public function update($request, $id)
    {
        $model =  $this->model->findOrFail($id);

        if($model->status == StatusEnum::COMPLETED){
            return $this->model->updateOrCreate(
                [ 'id' => $id ], [
                    'comment'   => $request['comment'],
                    'rating'    => $request['rating'],
                ]
            );
        }

        if($model->status == StatusEnum::PENDING){
            Address::updateOrCreate(
                [ 'id' => $model->address_id ], array_except($request, ['additional_instructions', 'id'])
            );

            return $this->model->updateOrCreate(
                [ 'id' => $id ], [
                    'additional_instructions' => $request['additional_instructions'],
                ]
            );
        }

        return $model;

    }
}
