<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\GroupDataTable;
use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    private Group $model;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Group();
    }

    public function index(GroupDataTable $dataTable)
    {
        return $dataTable->render('admin.group.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }
}
