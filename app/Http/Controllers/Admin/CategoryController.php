<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoriesDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Modules\Admin\Category\Requests\AdminCategoryStoreRequest;
use App\Modules\Admin\Category\Services\AdminCategoryService;
use App\Traits\ApiResponser;
use DB;
class CategoryController extends Controller {

    use ApiResponser;

    private AdminCategoryService $service;
    private Category $model;

    public function __construct()
    {
        $this->service = new AdminCategoryService();
        $this->model = new Category();
    }

    public function index(CategoriesDataTable $dataTable)
    {
        $filter = $this->model->Filter();
        return $dataTable->render('admin.category.datatable', compact('filter'));
    }

    public function show($modelId)
    {
        $data = $this->model->findOrFail($modelId);
        return html('admin.category.modal.view', compact('data'));
    }

    public function create()
    {
        return html('admin.category.form.create',[ 'data' => null ]);
    }

    public function edit($userId)
    {
        return html('admin.category.form.create',[ 'data' => $this->model->findOrFail($userId) ]);
    }

    public function store(AdminCategoryStoreRequest $request)
    {
        $user = $this->service->store($request->validated());
        return makeResponse(200, null, $user);
    }

    public function delete($id)
    {
        $model = $this->model->findOrFail($id);
        return html('admin.category.form.delete',[
            'canDelete' => $this->service->canDelete($model),
            'data' => $model
        ]);
    }

    public function destroy($id)
    {
        $this->service->delete($this->model->findOrFail($id));
        return makeResponse(200);
    }
}

