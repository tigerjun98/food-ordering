<?php

namespace App\Http\Controllers\User\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Attachment;
use App\Models\Cart;
use App\Models\Location;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Setting;
use App\Models\Transaction;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\VarDumper\Caster\TraceStub;

class DepositController extends Controller
{

    use ApiResponser;

    public function create()
    {
        $id = strval(abs( crc32( uniqid() ) ));
        return view('user.transaction.deposit.form', compact('id')); //ss
    }

    public function store(Request $request, $id){

        try {
            \DB::beginTransaction();

            $arr = [
                'id'        => $id,
                'amount'    => $request->get('amount'),
                'token'     => $request->get('token'),
                'type'      => 0, // deposit
                'address'   => $request->get('address'),
                'network'   => $request->get('network'),
                'user_id'   => Auth::user()->id,
                'status'    => 1,
            ];
//            $this->validate(new Request($arr), Transaction::$rules);
            Transaction::create($arr);

            \DB::commit();
            return $this->success('', 'submitted!', route('transaction.deposit.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));

        $query = Transaction::query();
        $data = $query
            ->filter($request)
            ->where('user_id', Auth::id())
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['total'] = Transaction::where('user_id', Auth::id())->count();

        return view('user.transaction.deposit.index',compact('option', 'data'));
    }

    public function indexDt(Request $request){

        $query = Transaction::query();
        $query->where('user_id', Auth::id());

        $data = $query
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path']    = 'user.transaction.deposit.index_dt';
        $option['column']       = ['date', 'amount', 'status', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function uploadDropzoneImage(Request $request, $id){


        $this->validate($request, [
            'file' => 'file|mimes:jpeg,png,jpg',
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
