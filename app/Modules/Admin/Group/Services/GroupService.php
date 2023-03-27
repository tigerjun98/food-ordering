<?php

namespace App\Modules\Admin\Group\Services;

use App\Exceptions\CommonException;
use App\Models\Group;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class GroupService
{
    private Group $model;

    public function __construct()
    {
        $this->model = new Group();
    }

    public function store(array $request): Group
    {
        return $this->model->updateOrCreate(['id' => $request['id'] ], $request);
    }

    public function delete(Group $model)
    {
        $model->delete();
    }
}
