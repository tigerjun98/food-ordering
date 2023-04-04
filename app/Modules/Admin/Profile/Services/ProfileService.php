<?php

namespace App\Modules\Admin\Profile\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    private Admin $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function updatePassword(Admin $admin, array $request): bool
    {
        return ($request['password'])
            ? $admin->update(['password' => Hash::make($request['password'])])
            : false;
    }

    public function store(array $request): Admin
    {
        $data = array_except($request, ['roles', 'password']);
        $data['clinic_id'] = auth()->user()->clinic_id;
        $admin = $this->model->updateOrCreate([ 'id' => $request['id'] ], $data);
        $this->updatePassword($admin, $request);

        return $admin;
    }
}
