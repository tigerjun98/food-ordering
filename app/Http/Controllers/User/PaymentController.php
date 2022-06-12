<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Log;
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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Str;

class PaymentController extends Controller {
    use ApiResponser;

    public function index(Request $request, $id){

        $data = OrderDetail::find($id);
        if(!$data || $data->status > 1) abort(404);

//        if(!Auth::check()) Auth::logout();
//        Auth::loginUsingId($data->user_id);

        if($request->status === 'CANCELLED'){
            return redirect()->route('order.','id='.$id)->withErrors(__('common.order_unpaid'));
        }

        if($request->status === 'SUCCESS'){
            return redirect()->route('order.', 'id='.$id)->withErrors(__('common.payment_success'));
        }

        return view('user.payment.index', compact('data', 'id'));
    }

    public function paymentCallback(Request $request, $id) {

        try {
            \DB::beginTransaction();

            $payment = Payment::where('order_detail_id', $id)->first();
            if(!$payment){
                return $this->error('invalid_id', 400);
            }

            $status = $request->data['status'];

            if($status === 'SUCCESS'){
                $payment->status = 1;


                $order = OrderDetail::find($id);
                $order->status = 1;
                $order->paid_at = Carbon::now();
                if($order->new_user){
                    $token = Str::random(64);
                    $order->reset_password_token = $token;
                }

                $order->save();

                if($order->new_user){
                    \DB::table('password_resets')->insert([
                        'email'     => $order->email,
                        'new_user'  => true,
                        'token'     => $token,
                        'created_at'=> Carbon::now()
                    ]);
                }

                $user = User::find($order->user_id);
                $user->notify(new \App\Notifications\OrderPlacedNotification($order));
            }
            $payment->callback_response = json_encode($request->all());
            $payment->save();
            \DB::commit();
            return $this->success('', 'success');

        } catch (\Exception $e) {
            \DB::rollback();
            $this->log($id, $e->getMessage(), $request->all());
            return $this->error($e->getMessage(), 401);
        }

    }

    public function resubmit(Request $request, $id) {

        $data = OrderDetail::find($id);
        if(!$data || $data->status != 0) return $this->error('order not found!', 400);

        OrderDetail::find($id)->callPaymentApi();
        return $this->success('', 'Payment submitted', route('payment.', $id));
    }

    public function requestPaymentId(Request $request, $id) {

        $data = OrderDetail::find($id);
        if(!$data) return $this->error('order not found!', 401);

        $pay = Payment::where('order_detail_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        if($pay){

            // if order just create, redirect to payment gateway
            $timeA = $pay->created_at->addMinutes(3);
            $timeB = Carbon::now();
            if ( $timeA >= $timeB && $pay->status == 0) {
                return $this->success('', 'Redirecting to payment gateway...', $pay->payment_url);
            }

            $status = $pay->status;
            switch ($status) {
                case 0 || 1:
                    $apiStatus = OrderDetail::find($id)->getPaymentStatus();
                    break;
                case 2:
                    // success paid
                    return $this->success(['status'=> 1], __('common.payment_success'));
                    break;
                case 3:
                    // payment expired
                    return $this->error(__('common.payment_expired'), 441);
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }

            switch ($apiStatus) {
                case "ACTIVE":
                    return $this->success('', 'Redirecting...', $pay->payment_url);
                case "IN_PROCESS":
                    return $this->success('', 'Redirecting...', $pay->payment_url);
                case "SUCCESS":
                    return $this->success(['status'=> 1], __('common.payment_success'));
                case "EXPIRED":
                    return $this->error(__('common.payment_expired'), 441);
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }
        }
    }

}
