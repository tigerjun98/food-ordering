<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commission;
use App\Models\CommissionDetail;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Promotion;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class CommissionController extends Controller {
    use ApiResponser;

    public function index(Request $request){
        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.commission.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = CommissionDetail::query();
        $data = $query
//            ->whereNotNull('name_en')
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path'] = 'admin.commission.table.table_data';
        $option['column'] = ['name', 'start_from', 'end_before', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }
        else {
            return view($this->path, compact('data', 'option'));
        }
    }

    public function edit(Request $request, $id){

        // new row will create when user click create button
        $data = CommissionDetail::find($id) ?? CommissionDetail::whereNull('name_en')->first();
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) CommissionDetail::create(['id' => $id]);

        return response()->json([
            'html' => view('admin.commission.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        CommissionDetail::where('id',$id)->delete();
        DB::table('commission')->where('commission_detail_id',$id)->delete();

        $this->adminLog('commission_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function update(Request $request, $id){

        try {
            \DB::beginTransaction();

            $arr = [
                'name_en'   => $request->get('name_en'),
                'name_cn'   => $request->get('name_cn'),
                'start_at'  => explode('-', $request->get('event_date'))[0] ?? null,
                'end_at'    => explode('-', $request->get('event_date'))[1] ?? null,
            ];

            $this->validate(new Request($arr), CommissionDetail::$rules);
            CommissionDetail::where('id', $id)->update($arr);

            DB::table('commission')->where('commission_detail_id', $id)->delete();

            if(!$request->get('commission')){
                return $this->error(__('messages.commission_missing'), 401);
            }

            foreach($request->get('commission') as $key => $bonus) {

                $min = $key > 0 ? intval($request->get('max')[$key - 1])+1 : $request->get('min')[0];
                $arr = [
                    'commission_detail_id' => $id,
                    'sorting'   => $key,
                    'bonus'     => $bonus,
                    'base_rate' => $request->get('base')[$key],
                    'min_sales' => $min,
                    'max_sales' => $key == count($request->get('commission'))-1 ? null : $request->get('max')[$key],
                ];

                if(count($request->get('commission')) == $key-1){
                    $arr['max_sales'] = 999999999999;
                }

                $this->validate(new Request($arr), Commission::$rules);
                Commission::create($arr);
            }

            \DB::commit();

            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401, $request->all());
        }
    }
}

