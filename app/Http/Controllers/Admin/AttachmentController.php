<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\AdminsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Attachment;
use App\Modules\Admin\Account\Requests\RoleStoreRequest;
use App\Modules\Admin\Attachment\Requests\AttachmentStoreRequest;
use App\Modules\Admin\Attachment\Services\AttachmentService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use DB;

class AttachmentController extends Controller {

    use ApiResponser;
    private Attachment $model;
    private AttachmentService $service;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->model = new Attachment();
        $this->service = new AttachmentService();
    }

    public function show($modelId)
    {
        $model = $this->model->findOrFail($modelId);
        return $this->service->show($model);
    }

    public function store(AttachmentStoreRequest $request)
    {
        $model = $this->service->store($request->validated());
        return makeResponse(200, null, $model);
    }

    public function destroy($attachId)
    {
        $this->service->delete($this->model->findOrFail($attachId));
        return makeResponse(200);
    }
}

