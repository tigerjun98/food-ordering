<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GroupDataTable;
use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Modules\Admin\Group\Requests\GroupStoreRequest;
use App\Modules\Admin\Group\Services\GroupService;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private Group $model;
    private GroupService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Group();
        $this->service = new GroupService();
    }

    public function index(GroupDataTable $dataTable)
    {
        return $dataTable->render('admin.group.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }
}
