<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Account\Services\AdminAccountService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Modules\Admin\User\Services\AdminService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class AccountController extends Controller {
    use ApiResponser;

    public function index(AdminsDataTable $dataTable){
        $filter = Admin::Filter();
        return $dataTable->render('admin.account.datatable', compact('filter'));
    }

    public function create()
    {
        return html('admin.account.form.create',[
            'data' => null
        ]);
    }

    public function store(AdminAccountStoreRequest $request)
    {
        (new AdminAccountService())->store($request->validated());
        return makeResponse(200);
    }

    public function delete($adminId)
    {
        return html('admin.account.form.delete',[
            'data' => Admin::findOrFail($adminId)
        ]);
    }

    public function destroy($adminId)
    {
        (new AdminAccountService())->delete(Admin::findOrFail($adminId));
        return makeResponse(200);
    }
}

