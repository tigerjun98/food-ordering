<?php

namespace App\Http\Controllers\User;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\Order;
use App\Models\OrderItem;
use App\Modules\Admin\Category\Requests\AdminCategoryStoreRequest;
use App\Modules\Admin\Category\Services\AdminCategoryService;
use App\Traits\ApiResponser;
use DB;
class UserOrderItemController extends Controller {

    use ApiResponser;

    private AdminCategoryService $service;
    private OrderItem $model;

    public function __construct()
    {
        $this->service = new AdminCategoryService();
        $this->model = new OrderItem();
    }
    public function index(CategoriesDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.category.datatable', compact('filter'));
    }

    public function show($modelId)
    {
        $data = $this->model->where('order_id', $modelId)->get();
        return html('admin.category.modal.view', compact('data'));
    }

    public function create()
    {
        $items = MenuItem::all();
        return html('user.order.create', compact('items'));
    }

    public function edit($userId)
    {
        return html('admin.category.form.create',[ 'data' => $this->model->findOrFail($userId) ]);
    }

    public function store(AdminCategoryStoreRequest $request)
    {
        $user = $this->service->store($request->validated());
        return makeResponse(200, null, $user);
    }

    public function update($orderId)
    {
        $item = MenuItem::findOrFail(request()->menu_item_id);
        $item = $this->model->updateOrCreate(
            [
                'user_id'       => auth()->id(),
                'order_id'      => $orderId,
                'menu_item_id'  => request()->menu_item_id,
            ], [
                'price'             => $item->price,
                'menu_item_id'      => $item->id,
            ]
        );

        if(request()->type == 'add'){
            $item->increment('quantity');
        } elseif(request()->type == 'delete'){
            $item->delete();
        } elseif($item->quantity > 1){
            $item->decrement('quantity');
        }

        $item->update([
            'total' => $item->quantity * $item->price
        ]);

        return html('user.order.cart',[
            'items' => $this->model->where('order_id', $orderId)->get(),
            'total' => $this->model->where('order_id', $orderId)->sum('total'),
        ]);
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        return html('admin.category.form.delete',[
            'canDelete' => $this->service->canDelete($model),
            'data' => $model
        ]);
    }

    public function destroy($orderId)
    {
        $model = OrderItem::findOrFail($id);
        $model->delete();
        return html('user.order.cart',[
            'items' => $this->model->where('order_id', $orderId)->get(),
            'total' => $this->model->where('order_id', $orderId)->sum('price'),
        ]);
    }
}

