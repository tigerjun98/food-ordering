<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommissionDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class SalesController extends Controller {
    use ApiResponser;

    public function export(Request $request){

        $query = Order::query();
        $data = $query
            ->filter($request)
            ->join('order_detail','order_detail.id','orders.order_detail_id')
            ->join('users as referral','order_detail.referral_id','referral.id')
            ->join('users as user','order_detail.user_id','user.id')
            ->groupBy(['order_detail.referral_id'])
            ->selectRaw('sum(order_price) as total, referral.name as referral')
            ->orderBy('total', 'desc')
            ->get();

        return response()->json(['html' => view('admin.sales.report.index', compact('data'))->render()]);
    }

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.sales.index',compact('option'));
    }

    public function indexDt(Request $request)
    {
        $query = Order::query();
        $query
            ->filter($request)
            ->join('order_detail','order_detail.id','orders.order_detail_id')
            ->join('users as referral','order_detail.referral_id','referral.id')
            ->groupBy(['order_detail.referral_id']);

        $data = $query
            ->selectRaw('sum(order_price) as total, referral.name as referral')
            ->orderBy('total', 'desc')
            ->paginate(20);

        $option['data_path'] = 'admin.sales.table.table_data';

        if($request->commission){
            $option['commission'] = CommissionDetail::find($request->commission);
        }

        if(isset($option['commission']) && $option['commission']){
            $option['column'] = ['username', 'total_sales', 'commission', 'action'];
        } else{
            $option['column'] = ['username', 'total_sales', 'action'];
        }

        if ($request->return == "table") {
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data', 'option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }
}

