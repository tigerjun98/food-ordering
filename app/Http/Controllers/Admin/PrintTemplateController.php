<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\DataTables\PrintTemplateDataTable;
use App\Entity\Enums\Country;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\PrintTemplate;
use App\Modules\Admin\Account\Requests\AdminAccountStoreRequest;
use App\Modules\Admin\Account\Requests\RoleStoreRequest;
use App\Modules\Admin\Account\Services\AdminAccountService;
use App\Modules\Admin\Account\Services\RoleService;
use App\Modules\Admin\Account\Services\AttachmentService;
use App\Modules\Admin\PrintTemplate\Requests\PrintTemplateStoreRequest;
use App\Modules\Admin\PrintTemplate\Services\PrintTemplateService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;
use Spatie\Permission\Models\Role;

class PrintTemplateController extends Controller {

    use ApiResponser;
    private PrintTemplate $model;
    private PrintTemplateService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new PrintTemplate();
        $this->service = new PrintTemplateService();
    }

    public function index(PrintTemplateDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.print-template.datatable', compact('filter'));
    }

    public function show($id)
    {
        $data = PrintTemplate::findOrFail($id);
        return html('admin.print-template.form.create', compact('data'));
    }

    public function create()
    {
        return html('admin.print-template.form.create',[
            'data' => null
        ]);
    }

    public function edit(int $printTemplateId)
    {
        $data = $this->model->findOrFail($printTemplateId);
        return html('admin.print-template.form.edit', compact('data'));
    }

    public function getCheckedItem(int $modelId)
    {
        $data = $this->model->findOrFail($modelId);
        return html('admin.print-template.form.create-items', compact('data'));
    }

    public function store(PrintTemplateStoreRequest $request)
    {
        $model = $this->service->store($request->validated());
        return makeResponse(200, null, $model);
    }

    public function delete($modelId)
    {
        return html('admin.print-template.form.delete',[
            'canDelete' => true,
            'data' => $this->model->findOrFail($modelId)
        ]);
    }

    public function destroy($modelId)
    {
        $this->service->delete($this->model->findOrFail($modelId));
        return makeResponse(200);
    }
}

