<?php

namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Merchant;
use App\Models\User;
use App\Modules\Admin\Profile\Requests\ProfileStorePasswordRequest;
use App\Modules\Admin\Profile\Requests\ProfileStoreRequest;
use App\Modules\Admin\Profile\Services\ProfileService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MerchantProfileController extends Controller
{
    use ApiResponser;

    private Merchant $model;
    private ProfileService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Merchant();
        $this->service = new ProfileService();
    }

    public function index()
    {
        return html('merchant.profile.index', [
            'categories' => Category::pluck('name_en', 'id')->toArray(),
            'data' => $this->model->findOrFail(auth()->id())
        ]);
    }

    public function store(ProfileStoreRequest $request)
    {
        $data = array_except($request->validated(), ['roles']);
        $data['category_id'] = request()->category_id;
        $this->model->find($request['id'])->update($data);
        return makeResponse(200);
    }

    public function storeCategory()
    {
        $this->model->find(request()->id)->update([
            'category_id'   => request()->category_id,
            'name'          => request()->name
        ]);
        return makeResponse(200);
    }


    public function storePassword(ProfileStorePasswordRequest $request)
    {
        $this->model->where('id', auth()->id())->update([
            'password' => Hash::make($request['password'])
        ]);
        return makeResponse(200);
    }
}
