<?php

namespace App\Modules\Admin\Account\Services;

use App\Models\Admin;
use App\Models\User;
use Carbon\Carbon;
use function PHPUnit\Framework\throwException;

class AdminAccountService
{
    private Admin $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function store(array $request): User
    {
        $account = $this->admin->find($request['id']);

        $account
            ? $account->update($request)
            : Admin::create($request);

        return $this->admin->find($request['id']);
    }

    public function delete(Admin $admin)
    {
        $admin->delete();
    }
}
