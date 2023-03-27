<?php

namespace App\Modules\Admin\Group\Services;

use App\Exceptions\CommonException;
use App\Models\Admin;
use App\Models\Group;
use App\Models\User;
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
        return $this->model->updateOrCreate(['id' => $request['id']], $request);
    }

    public function occupied(Group $group): bool
    {
        return (Admin::where('group_id', $group->id)->count() > 0 ||
                User::where('group_id', $group->id)->count() > 0)
                ? true
                : false;
    }

    public function delete(Group $group)
    {
        !self::occupied($group) ? $group->delete() : throwErr(trans('messages.permission_denied'));
    }
}
