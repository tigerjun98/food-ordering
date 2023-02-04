<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\UsersDataTable;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use App\Modules\Admin\Transaction\DataTables\TransactionsDataTable;
use App\Modules\Admin\Transaction\Services\UserService;
use App\Modules\Admin\User\Requests\UserStoreRequest;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class UserController extends Controller {

    use ApiResponser;

    public function index(UsersDataTable $dataTable){
        $filter = User::Filter();
        return $dataTable->render('admin.user.datatable', compact('filter'));
    }

    public function create()
    {
        return html('admin.user.form.create',[
            'data' => null
        ]);
    }

    public function edit($userId)
    {
        return html('admin.user.form.create',[
            'data' => User::findOrFail($userId)
        ]);
    }

    public function store(UserStoreRequest $request)
    {
        (new UserService())->store($request->validated());
        return makeResponse(200);
    }

//    public function edit(Request $request, $id){
//
//        // remove temporary created product
//        DB::table('users')->whereNull('name')->delete();
//
//        // new row will create when user click create button
//        $data = User::find($id) ?? null;
//        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
//        if(!$data) User::create(['id' => $id]);
//
//        return response()->json([
//            'html' => view('admin.user.form.index', compact('data', 'id'))->render()
//        ]);
//    }

    public function destroy(Request $request, $id){

        if(Transaction::where('user_id', $id)->first()){
            return $this->error(__('common.transaction_exists'), 401);
        }

        User::where('id',$id)->delete();
        $this->adminLog('user_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function update(Request $request, $id){

        $request->validate([
            'referral_username' => 'required|alpha_dash|exists:users,name',
        ]);

        $referral = User::where('name', $request->get('referral_username'))->first();

        try {
            \DB::beginTransaction();
            $arr = [
                'first_name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'referral_id'   => $referral->id ?? null,
                'phone'      => $request->get('phone'),
                'name'      => $request->get('name'),
                'email'     => $request->get('email'),
                'status'    => intval($request->get('status')),
            ];
            $this->validate(new Request($arr), User::Rules($id));

            if($request->get('password')){
                $this->adminLog('user_password_update', $request->all());
                $arr['password'] = Hash::make($request->get('password'));
            } else{
                $this->adminLog('user_update', $request->all());
            }

            User::where('id', $id)->update($arr);
            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }
}

