<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromotionController extends Controller {


//    public function index(Request $request)
//    {
//        $data = Promotion::where('status', 0)
//            ->paginate(2);
//
//        return view('user.promotion.index', compact('data'));
//    }

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('user.promotion.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = Promotion::query();
        $data = $query
            ->filter($request)
            ->where('status', 0)
            ->where('end_at', '>=', date("Y-m-d H:i:00", strtotime(Carbon::now())))
            ->where('start_at', '<=', date("Y-m-d H:i:59", strtotime(Carbon::now())))
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path'] = 'user.promotion.table.body';
        return response()->json(['html' => view($option['data_path'], compact('data','option'))->render()]);
    }


    public function edit(Request $request, $id){

        $data = OrderDetail::find($id);
        return response()->json([
            'html' => view('user.order.modal.index', compact('data'))->render()
        ]);
    }
}
