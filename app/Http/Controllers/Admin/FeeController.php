<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FeesDataTable;
use App\DataTables\OptionsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Modules\Admin\Fee\Requests\FeeStoreRequest;
use App\Modules\Admin\Fee\Services\FeeService;
use App\Modules\Admin\Option\Services\OptionService;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class FeeController extends Controller {

    use ApiResponser;

    private Fee $model;
    private FeeService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Fee();
        $this->service = new FeeService();
    }

    public function index(FeesDataTable $dataTable)
    {
        return $dataTable->render('admin.fee.datatable', [
            'filter' => $this->model->Filter()
        ]);
    }

    public function show(OptionsDataTable $dataTable, $type)
    {
        request()->type = $type;
        return $dataTable->render('admin.fee.datatable', [
            'filter' => $this->model->Filter(),
            'type' => $type
        ]);
    }

    public function create()
    {
        return html('admin.fee.form.create',[
            'data' => null,
        ]);
    }

    public function edit($modelId)
    {
        return html('admin.fee.form.create',[
            'data' => $this->model->findOrFail($modelId),
        ]);
    }

    public function store(FeeStoreRequest $request)
    {
        $this->service->store($request->validated());
        return makeResponse(200);
    }

    public function delete($optionId)
    {
        $model = $this->model->findOrFail($optionId);
        return html('admin.fee.form.delete',[
            'canDelete' => false,
            'data' => $model
        ]);
    }

    public function destroy($optionId)
    {
        $this->service->delete($this->model->findOrFail($optionId));
        return makeResponse(200);
    }
}

