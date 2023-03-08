<?php

namespace App\Modules\Admin\User\Services;

use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class UserService
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function store(array $request): User
    {
        return $this->model->updateOrCreate([ 'id' => $request['id'] ], $request);
    }

    public function canDelete(User $user): bool
    {
        $exists = false;

        $relations = ['consultations', 'queues'];
        foreach ($relations as $relation){
            $exists = $user->{$relation}()->first();
            if($exists) break;
        }

        return ! $exists;
    }

    public function delete(User $user)
    {
        if(!$this->canDelete($user)){
            throwErr( trans('messages.remove_in_used', ['name' => $user->full_name]) );
        }
        $user->forceDelete();
    }
}
