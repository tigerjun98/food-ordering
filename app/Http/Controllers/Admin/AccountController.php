<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class AccountController extends Controller {
    use ApiResponser;

    public function index(Request $request){
        $option['column'] = 'ready';
        $option['id'] = abs( crc32( uniqid() ) );
        return view('admin.account.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = Admin::query();
        $data = $query
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(50);

        $option['data_path']    = 'admin.account.table.table_data';
        $option['column']       = ['status', 'username', 'phone', 'email', 'permissions', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('admins')->whereNull('name')->delete();

        // new row will create when user click create button
        $data = Admin::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) $data = Admin::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.account.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        Admin::where('id', $id)->delete();
        $this->adminLog('admin_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function update(Request $request, $id){

        try {
            \DB::beginTransaction();
            $arr = [
                'phone'     => $request->get('phone'),
                'name'      => $request->get('name'),
                'email'     => $request->get('email'),
                'status'    => intval($request->get('status')),
                'permissions'=> $request->get('permissions')
            ];

            $this->validate(new Request($arr), Admin::Rules($id));

            if($request->get('password') && $request->get('password') != ''){
                $this->adminLog('admin_password_update', $request->all());
                $arr['password'] = Hash::make($request->get('password'));
            } else{
                $this->adminLog('admin_update', $request->all());
            }

            $arr['permissions'] = implode(',', $arr['permissions']);
            Admin::where('id', $id)->update($arr);
            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }
}

