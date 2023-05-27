<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Modules\Admin\User\Services\UserService;
use App\Traits\ApiResponser;
use DB;

class UserController extends Controller {

    use ApiResponser;

    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function index(UsersDataTable $dataTable)
    {
        $filter = User::Filter();
        return $dataTable->render('admin.user.datatable', compact('filter'));
    }

    public function show($modelId)
    {
        $data = User::findOrFail($modelId);
        return html('admin.user.modal.view', compact('data'));
    }

    public function create()
    {
        return html('admin.user.form.create',[ 'data' => null ]);
    }

    public function edit($userId)
    {
        return html('admin.user.form.create',[ 'data' => User::findOrFail($userId) ]);
    }

    public function store(UserStoreRequest $request)
    {
        $user = (new UserService())->store($request->validated());
        return makeResponse(200, null, $user);
    }

    public function delete($userId)
    {
        $user = User::findOrFail($userId);
        return html('admin.user.form.delete',[
            'canDelete' => $this->service->canDelete($user),
            'data' => $user
        ]);
    }

    public function destroy($userId)
    {
        (new UserService())->delete(User::findOrFail($userId));
        return makeResponse(200);
    }
}

