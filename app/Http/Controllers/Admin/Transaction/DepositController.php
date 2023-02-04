<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Transaction;
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

class DepositController extends Controller {
    use ApiResponser;

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = abs( crc32( uniqid() ) );
        return view('admin.transaction.deposit.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = Transaction::query();
        $data = $query
            ->where('type', 0) //deposit only
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(50);

        $option['data_path']    = 'admin.transaction.deposit.table.table_data';
        $option['column']       = ['status', 'full_name', 'amount', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function create(Request $request){
        $data = null;
        $id = strval(abs( crc32( uniqid() ) ));
        return response()->json([
            'html' => view('admin.transaction.deposit.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('transactions')->whereNull('user_id')->delete();

        // new row will create when user click create button
        $data = Transaction::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) Transaction::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.transaction.deposit.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        Transaction::where('id', $id)->delete();
        $this->adminLog('deposit_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required|alpha_dash|exists:users,name',
        ]);

        $user = User::where('name', $request->get('name'))->first();

        try {
            \DB::beginTransaction();
            $arr = [
                'user_id'   => $user->id,
                'amount'    => $request->get('amount'),
                'token'     => $request->get('token'),
                'type'      => 0, // deposit
                'address'   => $request->get('address'),
                'network'   => $request->get('network'),
                'status'    => intval($request->get('status')),
            ];
            $this->validate(new Request($arr), Transaction::$rules);

            $this->adminLog('deposit_update', $request->all());

            Transaction::where('id', $id)->update($arr);
            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function uploadDropzoneImage(Request $request, $id){

        $this->validate($request, [
            'file' => 'file|mimes:jpeg,png,jpg|max:10240',
        ]);

        try {
            Transaction::storeDepositReceipt($request, $id);
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function deleteDropzoneImage(Request $request, $id){

        try {
            \DB::beginTransaction();
            Transaction::deleteDepositReceipt($request, $id);
            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }

    }

}

