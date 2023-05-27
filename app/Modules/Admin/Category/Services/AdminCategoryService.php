<?php

namespace App\Modules\Admin\Category\Services;

use App\Models\Category;

class AdminCategoryService
{
    private Category $model;

    public function __construct()
    {
        $this->model = new Category();
    }

    public function store(array $request): Category
    {
        return $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
    }
    public function canDelete(Category $model): bool
    {
        $exists = false;

        foreach (Category::RELATIONS as $relation){
            $exists = $model->{$relation}()->first();
            if($exists) break;
        }

        return ! $exists;
    }

    public function delete(Category $model)
    {
        if(!$this->canDelete($model)){
            throwErr( trans('messages.remove_in_used', ['name' => $model->name_en]) );
        }
        $model->forceDelete();
    }
}
