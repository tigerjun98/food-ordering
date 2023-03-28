<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Queue;
use App\Modules\Admin\Account\Requests\RoleStoreRequest;
use App\Modules\Admin\Account\Services\AttachmentService;
use App\Modules\Admin\Permissions\Services\PermissionService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller {

    use ApiResponser;

    public function getDoctorOpt()
    {
        $query = (new PermissionService())->getDoctorAccounts();
        $admin = $query->FilterOption()->Active()->paginate(10);
        return response()->json($admin);
    }


}

