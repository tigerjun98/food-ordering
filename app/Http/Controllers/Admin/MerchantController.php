<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\MerchantsDataTable;
use App\DataTables\VendorsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Modules\Admin\Merchant\Requests\AdminMerchantStoreRequest;
use App\Modules\Admin\Merchant\Services\MerchantService;
use App\Traits\ApiResponser;
use DB;
class MerchantController extends Controller {

    use ApiResponser;

    private MerchantService $service;
    private Merchant $model;

    public function __construct()
    {
        $this->service = new MerchantService();
        $this->model = new Merchant();
    }

    public function index(MerchantsDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.merchant.datatable', compact('filter'));
    }

    public function show($modelId)
    {
        $data = $this->model->findOrFail($modelId);
        return html('admin.merchant.modal.view', compact('data'));
    }

    public function create()
    {
        return html('admin.merchant.form.create',[ 'data' => null ]);
    }

    public function edit($userId)
    {
        return html('admin.merchant.form.create',[ 'data' => $this->model->findOrFail($userId) ]);
    }

    public function store(AdminMerchantStoreRequest $request)
    {
        $user = $this->service->store($request->validated());
        return makeResponse(200, null, $user);
    }

    public function delete($userId)
    {
        $user = $this->model->findOrFail($userId);
        return html('admin.merchant.form.delete',[
            'canDelete' => $this->service->canDelete($user),
            'data' => $user
        ]);
    }

    public function destroy($userId)
    {
        $this->service->delete($this->model->findOrFail($userId));
        return makeResponse(200);
    }
}

