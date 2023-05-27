<?php

namespace App\Http\Controllers\User;

use App\DataTables\UserOrdersDataTable;
use App\Entity\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\CategoryPreference;
use App\Models\MenuItem;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\OrderItem;
use App\Modules\User\OrderItem\Requests\OrderStoreRequest;
use App\Modules\User\OrderItem\Services\UserOrderService;
use App\Traits\ApiResponser;
use DB;
class UserMerchantController extends Controller {

    use ApiResponser;

    private UserOrderService $service;
    private Merchant $model;

    public function __construct()
    {
        $this->service = new UserOrderService();
        $this->model = new Merchant();
    }

    public function index()
    {
        $categoryIds = CategoryPreference::orderBy('priority', 'desc')
            ->where('user_id', auth()->id())
            ->pluck('category_id')->toArray();

        $ids = array_values($categoryIds);

        $query = $this->model->whereIn('category_id', $ids)
            ->orderByRaw("FIELD(category_id, " . implode(',', $ids) . ")");

        return html('user.merchant.listing', [
            'data'  => $query->get()
        ]);
    }

    public function show($id)
    {
        $categoryIds = CategoryPreference::orderBy('priority', 'desc')
            ->where('user_id', auth()->id())
            ->pluck('category_id')->toArray();

        $ids = array_values($categoryIds);

        $merchant = $this->model->findOrFail($id);
        $items = MenuItem::where('merchant_id', $id)
            ->whereIn('category_id', $ids)
            ->orderByRaw("FIELD(category_id, " . implode(',', $ids) . ")")
            ->get();

        return html('user.order.create', compact(
            'items', 'merchant'
        ));
    }

}

