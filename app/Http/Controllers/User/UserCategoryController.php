<?php

namespace App\Http\Controllers\User;

use App\DataTables\UserOrdersDataTable;
use App\Entity\Enums\StatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Category;
use App\Models\CategoryPreference;
use App\Models\MenuItem;
use App\Models\Merchant;
use App\Models\Order;
use App\Models\OrderItem;
use App\Modules\User\Category\Requests\UserCategoryUpdateRequest;
use App\Modules\User\Category\Services\UserCategoryService;
use App\Modules\User\OrderItem\Requests\OrderStoreRequest;
use App\Modules\User\OrderItem\Services\UserOrderService;
use App\Traits\ApiResponser;
use DB;
class UserCategoryController extends Controller {

    use ApiResponser;

    private UserCategoryService $service;
    private CategoryPreference $model;

    public function __construct()
    {
        $this->service = new UserCategoryService();
        $this->model = new CategoryPreference();
    }

    public function index()
    {
        $this->service->createIfNotExists();

        if(request()->ajax()){
            $data = CategoryPreference::where('user_id', auth()->id())->orderBy('priority', 'desc')->get();
            return html('components.user.pages.category.listing', compact('data'));
        }

        return view('user.category.index');
    }

    public function update(UserCategoryUpdateRequest $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model = $this->service->update($model, $request->validated());
        return makeResponse(200, null, $model);
    }
}

