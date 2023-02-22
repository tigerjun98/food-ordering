<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Account\Services\AttachmentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller {

    use ApiResponser;

    public function getDoctorOpt()
    {
        return response()->json(
            Admin::FilterOption()->paginate(10)
        );
    }


}

