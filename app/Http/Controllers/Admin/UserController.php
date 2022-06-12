<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Models\UserDevice;
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

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = abs( crc32( uniqid() ) );
        return view('admin.user.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = User::query();
        $data = $query
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(50);

        $option['data_path']    = 'admin.user.table.table_data';
        $option['column']       = ['status', 'username', 'full_name', 'referral', 'referral_from', 'phone', 'email', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('users')->whereNull('name')->delete();

        // new row will create when user click create button
        $data = User::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) User::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.user.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        if(OrderDetail::where('user_id', $id)->first()){
            return $this->error('order_exists', 401);
        }

        User::where('id',$id)->delete();
        DB::table('cart')->where('user_id',$id)->delete();
        DB::table('address')->where('user_id',$id)->delete();

        Cart::where('user_id',$id)->delete();

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

