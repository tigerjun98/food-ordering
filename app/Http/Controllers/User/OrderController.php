<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Review;
use App\Models\User;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\RateLimiter;
use DB;

class OrderController extends Controller {
    use ApiResponser;

    public function index(Request $request){

        $option['column'] = 'ready';
        $option['id'] = strval(abs( crc32( uniqid() ) ));
        return view('user.order.index',compact('option'));
    }

    public function indexDt(Request $request){

        $query = OrderDetail::query();

        if(Auth::check()) {
            $query->where('user_id', Auth::id());
        } else{
            $query->where('id', $request->id);
        }

        $data = $query
            ->filter($request)
            ->orderBy('created_at','desc')
            ->paginate(20);

        $option['data_path']    = 'user.order.table.table_data';
        $option['column']       = ['date', 'product', 'price', 'status', 'action'];

        if($request->return == "table"){
            $option['response'] = 'ajax';
            return response()->json(['html' => view($this->path, compact('data','option'))->render()]);
        }

        return view($this->path, compact('data', 'option'));
    }


    public function edit(Request $request, $id){

        $data = OrderDetail::find($id);
        return response()->json([
            'html' => view('user.order.modal.index', compact('data'))->render()
        ]);
    }

    public function submitReview(Request $request){

        try {
            \DB::beginTransaction();

            if($request->get('comment')){
                foreach($request->get('comment') as $key => $msg) {
                    if($msg){
                        $arr = [
                            'rating'    => $request->get('rating')[$key],
                            'comment'   => $msg,
                            'status'    => 0,
                        ];
                        $this->validate(new Request($arr), Review::$rules);
                        Review::find($key)->update($arr);
                    }

                }
            }
            \DB::commit();
            return $this->success('', 'success', route('order.'));

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function review(Request $request, $id){

        $data = OrderDetail::find($id);
        return view('user.order.review',compact('data'));
    }

    public function checkout(Request $request) {

        $cart = Cart::where('user_id', $this->getUserID())->get();
        if(count($cart) > 0) return view('user.checkout.index', compact('cart'));

        return redirect()->route('product')->withErrors(__('messages.product_missing'));
    }

    public function submitOrder(Request $request){

        $userId = $this->getUserID();

        if(OrderDetail::where('user_id', $userId)->where('status', 0)->first()){
            return $this->error(__('passwords.unpaid_order_found'), 401);
        }

        if (RateLimiter::tooManyAttempts('make-order:'.$userId, $perMinute = 1)) {
            return $this->error(__('passwords.throttled'), 429);
        }

        $referral = User::where('name', $this->getReferralName($request))->first();
        if(!$referral){
            Session::put('referral', 'origin');
            $referral = User::where('name', 'origin')->first();
        }

        if(Cart::where('user_id', $userId)->count() < 1)
            return $this->error(__('messages.product_missing'), 401);

        try {
            \DB::beginTransaction();
            $user = User::find($userId);
            $newUser = false;
            if(!$user){
                $name = str_replace(' ', '_', $request->get('last_name')).'_'.rand(1231,9999);
                $arr = [
                    'id'            => $userId,
                    'referral_id'   => $referral->id,
                    'referral_from' => Session::get('referral_url') ?? '',
                    'first_name'    => $request->get('first_name'),
                    'last_name'     => $request->get('last_name'),
                    'name'          => $name,
                    'email'         => $request->get('email'),
                    'phone'         => $request->get('phone'),
                    'password'      => $name,
                ];
                $newUser = true;
                $this->validate(new Request($arr), User::$rules);
                User::create($arr);
                $user = User::where('name', $name)->first();
            }

            $total = 0;
            $batch_id = strval(abs( crc32( uniqid() ) ));
            $id = strval(abs( crc32( uniqid() ) ));

            $items = Cart::where('user_id', $userId)->get();

            foreach($items as $key => $item) {
                $qty = $item->quantity;
                $price = Product::getProductPrice($item->product_type_id, $user['name']);

                $total += ($price*$qty);
                $arr = [
                    'order_batch'       => $batch_id,
                    'quantity'          => $qty,
                    'product_type_name' => $item->productType['product_type_name'],
                    'product_name'      => $item->product['product_name_en'],
                    'product_id'        => $item->product_id,
                    'product_type_id'   => $item->product_type_id,
                    'order_detail_id'   => $id,
                    'unit_price'        => (float)number_format((float)$price, 2, '.', ''),
                    'order_price'       => (float)number_format((float)($price*$qty), 2, '.', ''),
                ];
                $this->validate(new Request($arr), Order::$rules);
                Order::create($arr);
            }

            $adds = Address::where('user_id',$user->id)->first();
            if(!$adds){
                $address = [
                    'user_id'       => $user->id,
                    'first_name'    => $request->get('first_name'),
                    'last_name'     => $request->get('last_name'),
                    'phone'         => $request->get('phone'),
                    'state'         => $request->get('state'),
                    'area'          => $request->get('area'),
                    'postcode'      => $request->get('postcode'),
                    'address_1'     => $request->get('address_1'),
                    'address_2'     => $request->get('address_2'),
                ];
                Address::create($address);
            }

            $orders = [
                'new_user'      => $newUser,
                'id'            => $id,
                'user_id'       => $user->id,
                'referral_id'   => $referral->id,
                'user_tier'     => intval($user->tier),
                'name'          => $user->name,
                'first_name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'email'         => $request->get('email'),
                'phone'         => $request->get('phone'),
                'state'         => $request->get('state'),
                'area'          => $request->get('area'),
                'status'        => 0,
                'postcode'      => $request->get('postcode'),
                'address_1'     => $request->get('address_1'),
                'address_2'     => $request->get('address_2'),
                'remark'        => $request->get('remark'),
                'full_address'  => $request->get('address_1').' '.$request->get('address_2').', '. $request->get('postcode').' '.$request->get('area').', '.$request->get('state'),
                'total_price'   => (float)number_format((float)($total), 2, '.', ''),
            ];

            $this->validate(new Request($orders), OrderDetail::$rules);
            $orderDetail = OrderDetail::create($orders);

            DB::table('cart')->where('user_id', $userId)->delete();

            $orders = Order::where('order_detail_id', $id)
                ->groupBy('product_id')
                ->pluck('product_id');

            foreach ($orders as $prodID){
                Review::create([
                    'user_id'           => $user->id,
                    'product_id'        => $prodID,
                    'order_detail_id'   => $id,
                ]);
            }
            \DB::commit();

            RateLimiter::hit('make-order:'.$userId);
            OrderDetail::find($id)->callPaymentApi();

            return $this->success('', __('messages.order_placed'), route('payment.', $id));

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }

    }

    public function receivedOrder(Request $request, $id){

        $order = OrderDetail::find($id);
        if(!$order) return $this->error(__('messages.order_not_found'), 401);

        try {
            \DB::beginTransaction();
            $order->status = 4;
            $order->save();
            \DB::commit();
            return $this->success('', __('messages.success'), route('order.'));

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }

    }

    public function cancelOrder(Request $request, $id){

        $order = OrderDetail::find($id);
        if(!$order) return $this->error(__('messages.order_not_found'), 401);

        try {
            \DB::beginTransaction();
            $order->status = 6;
            $order->save();
            \DB::commit();
            return $this->success('', __('messages.success'), route('order.'));

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }

    }

}
