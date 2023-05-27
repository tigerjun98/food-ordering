<?php

namespace App\Http\Controllers\User;

use App\DataTables\UserOrdersDataTable;
use App\Entity\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\MenuItem;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\OrderItem;
use App\Modules\User\OrderItem\Requests\OrderStoreRequest;
use App\Modules\User\OrderItem\Services\UserOrderService;
use App\Traits\ApiResponser;
use DB;
class UserOrderController extends Controller {

    use ApiResponser;

    private UserOrderService $service;
    private Order $model;

    public function __construct()
    {
        $this->service = new UserOrderService();
        $this->model = new Order();
    }

    public function checkout($id)
    {
        return html('user.order.form.checkout', [
            'data'  => Address::where('user_id', auth()->id())->latest()->first(),
            'items' => OrderItem::where('order_id', $id)->get(),
            'id'    => $id
        ]);
    }

    public function index(UserOrdersDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('user.order.datatable', compact('filter'));
    }

    public function showMenuItem($merchantId)
    {
        $merchant = \App\Models\Merchant::findOrFail($merchantId);
        $items = MenuItem::where('merchant_id', $merchantId)->get();
        return html('user.order.create', compact('items', 'merchant'));
    }
    public function show($modelId)
    {
        $data = $this->model::findOrFail($modelId);
        return html('user.order.view', compact('data'));
    }

    public function create()
    {
        $items = MenuItem::all();
        return html('user.order.create', compact('items'));
    }

    public function edit($id)
    {
        $model = $this->model->findOrFail($id);
        return html('user.order.form.checkout', [
            'data'  => $model->address,
            'items' => OrderItem::where('order_id', $id)->get(),
            'id'    => $id,
            'isUpdate' => true,
            'model' => $model,
        ]);
    }

    public function store(OrderStoreRequest $request)
    {
        $model = $this->service->store($request->validated());
        return makeResponse(201, null, [
            'redirect' => route('order.index')
        ]);
    }

    public function update(OrderStoreRequest $request, $id)
    {
        $model = $this->service->update($request->validated(), $id);
        return makeResponse(200, null, $model);
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        return html('user.order.form.delete',[
            'canDelete' => $model->status == StatusEnum::PENDING,
            'data' => $model
        ]);
    }

    public function destroy($id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        OrderItem::where('order_id', $id)->delete();

        return makeResponse(200);
    }
}

