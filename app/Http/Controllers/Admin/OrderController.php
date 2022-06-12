<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderShipped;
use App\Models\Location;
use App\Models\Log;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Review;
use App\Models\Setting;
use App\Models\User;
use App\Traits\ApiResponser;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use DB;

class OrderController extends Controller {
    use ApiResponser;

    public function view(Request $request, $id){

        $data = OrderDetail::find($id);

        return response()->json([
            'html' => view('admin.order.modal.details', compact('data', 'id'))->render()
        ]);
    }

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('admin.order.index',compact('option'));
    }

    public function indexDt(Request $request){

        OrderDetail::whereNull('user_id')->forceDelete();

        $query = OrderDetail::query();
        $data = $query
            ->whereNotNull('user_id')
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path']    = 'admin.order.table.table_data';
        $option['column']       = ['id', 'status', 'full_name', 'phone', 'referral', 'total_price', 'address', 'created_at', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }

    public function edit(Request $request, $id){

        // remove temporary created product
        DB::table('order_detail')->whereNull('user_id')->delete();

        // new row will create when user click create button
        $data = OrderDetail::find($id) ?? null;
        $id = $data ? $id : strval(abs( crc32( uniqid() ) ));
        if(!$data) OrderDetail::create(['id' => $id]);
//        else{
//            $rev = Review::where('order_detail_id', $id)->first();
//            if(!$rev){
//                // check how many product
//                $prod = Order::where('order_detail_id', $id)
//                    ->groupBy('product_id')
//                    ->pluck('product_id');
//
//                foreach ($prod as $prodID){
//                    Review::create([
//                        'user_id'           => $data->user_id,
//                        'product_id'        => $prodID,
//                        'order_detail_id'   => $id,
//                    ]);
//                }
//            }
//        }

        return response()->json([
            'html' => view('admin.order.form.index', compact('data', 'id'))->render()
        ]);
    }

    public function destroy(Request $request, $id){

        OrderDetail::where('id',$id)->delete();
        $this->adminLog('order_delete', ['id'=>$id]);
        return $this->success('', 'success');
    }

    public function getUserInfo($username){
        $data = User::where('name', $username)->first();
        if($data) return $data;

        return $this->error('user not found!', 401);
    }

    public function getProductPrice(Request $request){
        return Product::getProductPrice($request->product_type_id, $request->get('name'));
    }

    public function update(Request $request, $id){

        $logMsg = '';
        try {
            \DB::beginTransaction();

            $order = OrderDetail::find($id);
            if(!$order->referral_id && !$order->user_id){
                $referral = User::where('name', $request->get('referral_username'))->first();
                if(!$referral) $referral = User::where('name', 'origin')->first();

                $user = User::where('name', $request->get('name'))->first();
                if(!$user){
                    $name = str_replace(' ', '_', $request->get('last_name')).'_'.rand(1231,9999);
                    $arr = [
                        'referral_id'   => $referral->id,
                        'first_name'    => $request->get('first_name'),
                        'last_name'     => $request->get('last_name'),
                        'name'          => $name,
                        'email'         => $request->get('email'),
                        'phone'         => $request->get('phone'),
                        'password'      => Hash::make('123123'),
                    ];
                    $this->validate(new Request($arr), User::$rules);
                    User::create($arr);
                    $user = User::where('name', $name)->first();
                }else{
                    $user = User::find($order->user_id);
                }
            } else{
                $user = User::find($order->user_id);
            }

            $total = 0;
            $batch_id = strval(abs( crc32( uniqid() ) ));



            if(Order::where('order_detail_id', $id)->count() < 1){
                if($request->get('quantity')){

                    foreach($request->get('quantity') as $key => $qty) {
                        if(Order::find($key)){
                            $price = Order::find($key)['unit_price'];
                            $total += ($price*$qty);
                            $arr = [
                                'order_batch'       => $batch_id,
                                'quantity'          => $qty,
                                'order_price'       => (float)number_format((float)($price*$qty), 2, '.', ''),
                            ];
                            Order::find($key)->update($arr);
                        }
                        else{
                            $productType = ProductType::find($request->get('orders')[$key]);
                            $price = Product::getProductPrice($productType->id, $user['name']);
                            $total += ($price*$qty);
                            $arr = [
                                'order_batch'       => $batch_id,
                                'quantity'          => $qty,
                                'product_type_name' => $productType->product_type_name,
                                'product_name'      => $productType->product_name,
                                'product_id'        => $productType->product_id,
                                'product_type_id'   => $productType->id,
                                'order_detail_id'   => $id,
                                'unit_price'        => (float)number_format((float)$price, 2, '.', ''),
                                'order_price'       => (float)number_format((float)($price*$qty), 2, '.', ''),
                            ];
                            $this->validate(new Request($arr), Order::$rules);
                            Order::create($arr);
                        }
                    }
                    // Remove product type if this update the type deleted.
                    DB::table('orders')
                        ->where('order_detail_id', $id)
                        ->whereNotIn('order_batch', [$batch_id])
                        ->delete();
                } else{
                    return $this->error(__('messages.product_missing'), 401);
                }

                $this->adminLog('order_create', $request->all());

            } else{
                $total = $order->total_price;
                $this->adminLog('order_update', $request->all());
            }

            $arr = [
                'user_id'       => $order->user_id ?? $user->id,
                'referral_id'   => $order->referral_id ?? $referral->id,
                'name'          => $order->name ?? $user->name,
                'first_name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'email'         => $request->get('email'),
                'phone'         => $request->get('phone'),
                'status'        => intval($request->get('status')),
                'shipping_courier'  => $request->get('shipping_courier'),
                'tracking_no'       => $request->get('tracking_no'),
                'state'         => $request->get('state'),
                'area'          => $request->get('area'),
                'postcode'      => $request->get('postcode'),
                'address_1'     => $request->get('address_1'),
                'address_2'     => $request->get('address_2'),
                'full_address'  => $request->get('address_1').' '.$request->get('address_2').', '. $request->get('postcode').' '.$request->get('area').', '.$request->get('state'),
                'total_price'   => (float)number_format((float)($total), 2, '.', ''),
            ];

            $this->validate(new Request($arr), OrderDetail::$rules);
            OrderDetail::where('id', $id)->update($arr);

            if($request->get('comment')){
                foreach($request->get('comment') as $key => $msg) {
                    if($msg){
                        $arr = [
                            'rating'    => $request->get('rating')[$key],
                            'comment'   => $msg,
                            'status'    => isset($request->get('status')[$key]) ? 1 : 0,
                        ];
                        $this->validate(new Request($arr), Review::$rules);
                        Review::find($key)->update($arr);
                    }
                }
            }

            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }


    }


}

