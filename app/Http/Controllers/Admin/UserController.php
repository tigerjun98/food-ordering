<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Entity\Enums\Country;
use App\Entity\Enums\GenderEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Modules\Admin\User\Services\UserService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;
use App\Entity\Enums\CountryEnum;

class UserController extends Controller {

    use ApiResponser;

    public function searchPatient()
    {
        $nric = str_replace('-', '', request()->nric);
        $user = User::where('nric', $nric)->first();
        if($user){
            return makeResponse(200, 'Patient exists!', $user);
        } else{
            return makeResponse(502, 'Patient not exists!');
        }
    }

    public function index(UsersDataTable $dataTable)
    {
        $filter = User::Filter();
        return $dataTable->render('admin.user.datatable', compact('filter'));
    }

    public function create()
    {
        return html('admin.user.form.create',[ 'data' => null ]);
    }

    public function edit($userId)
    {
        return html('admin.user.form.create',[ 'data' => User::findOrFail($userId) ]);
    }

    public function store(UserStoreRequest $request)
    {
        $user = (new UserService())->store($request->validated());
        return makeResponse(200, null, $user);
    }

    public function delete($userId)
    {
        return html('admin.user.form.delete',[
            'data' => User::findOrFail($userId)
        ]);
    }

    public function destroy($userId)
    {
        (new UserService())->delete(User::findOrFail($userId));
        return makeResponse(200);
    }
}

