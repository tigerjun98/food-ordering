<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Modules\Admin\User\Services\UserService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class UserController extends Controller {

    use ApiResponser;

    public function index(UsersDataTable $dataTable)
    {
        $filter = User::Filter();
        return $dataTable->render('admin.user.datatable', compact('filter'));
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
        (new UserService())->store($request->validated());
        return makeResponse(200);
    }

    public function delete($userId)
    {
        return html('admin.user.form.delete',[
            'data' => User::findOrFail($userId)
        ]);
    }

    public function destroy($userId)
    {
        (new UserService())->delete(User::findOrFail($userId));
        return makeResponse(200);
    }
}

