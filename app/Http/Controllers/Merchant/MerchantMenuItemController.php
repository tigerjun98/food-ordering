<?php

namespace App\Http\Controllers\Merchant;

use App\DataTables\MenuItemsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MenuItem;
use App\Models\OrderItem;
use App\Modules\Merchant\MenuItem\Requests\MerchantMenuItemStoreRequest;
use App\Modules\Merchant\MenuItem\Services\MerchantMenuItemService;
use App\Traits\ApiResponser;
use DB;
use Illuminate\Http\Request;

class MerchantMenuItemController extends Controller {

    use ApiResponser;
    private MenuItem $model;
    private MerchantMenuItemService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new MenuItem();
        $this->service = new MerchantMenuItemService();
    }

    public function index(MenuItemsDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('merchant.menu-item.datatable', compact('filter'));
    }

    public function create()
    {
        $data = [
            'id' => new_id(),
        ];

        $data = (object)$data;
        $categories = Category::pluck('name_en', 'id')->toArray();
        return html('merchant.menu-item.form.create', compact('data', 'categories'));
    }

    public function getCategoryLists()
    {
        $model = Category::FilterOption()->paginate(10);
        return response()->json($model);
    }

    public function edit(int $id)
    {
        $data = $this->model->findOrFail($id);
        $categories = Category::pluck('name_en', 'id')->toArray();
        return html('merchant.menu-item.form.create', compact('data', 'categories'));
    }

    public function store(MerchantMenuItemStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($id)
    {
        $order = OrderItem::where('menu_item_id', $id)->exists();

        return html('merchant.menu-item.form.delete',[
            'data' => $this->model->findOrFail($id),
            'canDelete' => !$order
        ]);
    }

    public function destroy($adminId)
    {
        $this->service->delete($this->model->findOrFail($adminId));
        return makeResponse(200);
    }
}

