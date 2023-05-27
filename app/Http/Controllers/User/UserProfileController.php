<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Modules\Admin\Profile\Requests\ProfileStorePasswordRequest;
use App\Modules\Admin\Profile\Requests\ProfileStoreRequest;
use App\Modules\Admin\Profile\Services\ProfileService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    use ApiResponser;

    private User $model;
    private ProfileService $service;

    public function __construct()
    {
        $this->model = new User();
        $this->service = new ProfileService();
    }

    public function index()
    {
        return html('user.profile.index', [
            'data' => $this->model->findOrFail(auth()->id())
        ]);
    }

    public function store(ProfileStoreRequest $request)
    {
        $data = array_except($request->validated(), ['roles']);
        $this->model->find($request['id'])->update($data);
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
