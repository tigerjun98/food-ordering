<?php

namespace App\Modules\Admin\User\Services;

use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class UserService
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function store(array $request): User
    {
        $user = $this->user->find($request['id']);

        $user
            ? $user->update($request)
            : User::create($request);

        return $this->user->find($request['id']);
    }
}
