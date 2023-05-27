<?php

namespace App\Modules\Admin\Merchant\Services;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Merchant;
use App\Models\User;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\throwException;

class MerchantService
{
    private Merchant $model;

    public function __construct()
    {
        $this->model = new Merchant();
    }

    public function store(array $request): Merchant
    {
        $model = $this->model->updateOrCreate(
            [ 'id' => $request['id'] ],
            array_except( $request, ['password'] )
        );
        $this->updatePassword($model, $request);
        return $model;
    }

    public function updatePassword(Merchant $data, array $request): bool
    {
        if($request['password']){
            return $data->update([
                'password' => Hash::make($request['password'])
            ]);
        }
        return false;
    }

    public function canDelete(Merchant $model): bool
    {
        $exists = false;

        foreach (Merchant::RELATIONS as $relation){
            $exists = $model->{$relation}()->first();
            if($exists) break;
        }

        return ! $exists;
    }

    public function delete(Merchant $model)
    {
        if(!$this->canDelete($model)){
            throwErr( trans('messages.remove_in_used', ['name' => $model->full_name]) );
        }
        $model->forceDelete();
    }
}
