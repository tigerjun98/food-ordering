<?php

namespace App\Modules\Admin\User\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
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
        $user = $this->model->updateOrCreate([ 'id' => $request['id'] ], array_except( $request, ['password'] ));
        $this->updatePassword($user, $request);
        return $user;
    }

    public function updatePassword(User $user, array $request): bool
    {
        if($request['password']){
            return $user->update([
                'password' => Hash::make($request['password'])
            ]);
        }
        return false;
    }

    public function canDelete(User $user): bool
    {
        $exists = false;

        foreach (User::RELATIONS as $relation){
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
