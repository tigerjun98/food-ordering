<?php

namespace App\Http\Controllers\Merchant;

use App\DataTables\MerchantOrdersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Modules\Admin\User\Services\UserService;
use App\Modules\Merchant\Order\Requests\MerchantOrderStoreRequest;
use App\Modules\Merchant\Order\Services\MerchantOrderService;
use App\Traits\ApiResponser;
use DB;

class MerchantOrderController extends Controller {

    use ApiResponser;

    private MerchantOrderService $service;
    private Order $model;

    public function __construct()
    {
        $this->service = new MerchantOrderService();
        $this->model = new Order();
    }

    public function index(MerchantOrdersDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('merchant.order.datatable', compact('filter'));
    }

    public function show($modelId)
    {
        $data = $this->model->findOrFail($modelId);
        return html('merchant.order.modal.view', compact('data'));
    }

    public function edit($modelId)
    {
        return html('merchant.order.form.create',[ 'data' => $this->model->findOrFail($modelId) ]);
    }

    public function update(MerchantOrderStoreRequest $request, $modelId)
    {
        $user = $this->service->update($request->validated(), $modelId);
        return makeResponse(200, null, $user);

    }

    public function delete($id)
    {
        $user = $this->model->findOrFail($id);
        return html('merchant.order.form.delete',[
            'canDelete' => true,
            'data' => $user
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

