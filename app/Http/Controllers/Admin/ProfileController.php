<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Enums\Country;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Account\Requests\RoleStoreRequest;
use App\Modules\Admin\Account\Services\AdminAccountService;
use App\Modules\Admin\Account\Services\RoleService;
use App\Modules\Admin\Account\Services\AttachmentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    use ApiResponser;

    private Admin $model;
    private AdminAccountService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Admin();
        $this->service = new AdminAccountService();
    }

    public function show($adminId)
    {
        return html('admin.profile.index', [
            'data' => $this->model->findOrFail($adminId)
        ]);
    }

    public function store(AdminAccountStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }
}
