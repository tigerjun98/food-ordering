<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Queue;
use App\Models\User;
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
        $admin = $query->FilterOption()->FilterOptionActive()->paginate(10);
        return response()->json($admin);
    }

    public function getUserOpt()
    {
        $patient = User::FilterOptionNameNric()->paginate(10)->toArray();
        $new_patient = ['id' => 'new-patient', 'name' => 'New Patient'];
        array_unshift($patient['data'], $new_patient);
        return response()->json($patient);
    }
}

