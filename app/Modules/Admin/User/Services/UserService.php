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
        return ! Consultation::where('user_id', $user->id)->exists();
    }

    public function delete(User $user)
    {
        $user->delete();
    }
}
