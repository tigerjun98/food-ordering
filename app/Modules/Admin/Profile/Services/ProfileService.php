<?php

namespace App\Modules\Admin\Profile\Services;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileService
{
    private Admin $model;

    public function __construct()
    {
        $this->model = new Admin();
    }

    public function store(array $request): Admin
    {
        $data = array_except($request, ['roles']);
        $data['clinic_id'] = auth()->user()->clinic_id;
        $this->model->find($request['id'])->update($data);
        return $this->model->find($request['id'])->first();
    }

    public function updatePassword(array $request): bool
    {
        $this->model->where('id', $request['id'])->update([
            'password' => Hash::make($request['password'])
        ]);
        return true;
    }

}
