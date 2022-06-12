<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
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

class LogController extends Controller {
    use ApiResponser;

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.log.index',compact('option'));
    }

    public function indexDt(Request $request)
    {
        $query = Log::query();
        $data = $query
            ->filter($request)
            ->where('status', 1)
            ->whereNotNull('admin_id')
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        $option['data_path'] = 'admin.log.table.table_data';
        $option['column'] = ['username', 'message', 'request', 'created_at'];

        if ($request->return == "table") {
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data', 'option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }
}

