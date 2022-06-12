<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Location;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    use ApiResponser;

    public function home()
    {
        return view('user.home.index'); //ss
    }

    public function index()
    {
        $data = User::find(Auth::id());
        return view('user.account.index', compact('data')); //ss
    }

    public function update(Request $request){

        try {
            \DB::beginTransaction();
            $arr = [
                'first_name'=> $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'phone'     => $request->get('phone'),
                'email'     => $request->get('email'),
                'status'    => Auth::user()->status,
                'name'      => Auth::user()->name,
            ];

            if($request->get('old_password') && $request->get('password')){

                $request->validate([
                    'old_password'  => 'required|min:5',
                    'password'      => 'required|confirmed|min:6'
                ]);

                if(Hash::check($request->get('old_password'), Auth::user()->password)){
                    return $this->error('Incorrect old password', 401);
                }

                $arr['password'] = Hash::make($request->get('password'));
            }

            $this->validate(new Request($arr), User::Rules(Auth::id()));
            User::find(Auth::id())->update($arr);

            \DB::commit();
            return $this->success('Success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function updateAddress(Request $request){

        try {
            \DB::beginTransaction();
            $arr = [
                'user_id'       => Auth::id(),
                'first_name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'phone'         => $request->get('phone'),
                'state'         => $request->get('state'),
                'area'          => $request->get('area'),
                'postcode'      => $request->get('postcode'),
                'address_1'     => $request->get('address_1'),
                'address_2'     => $request->get('address_2'),
            ];

            $this->validate(new Request($arr), Address::$rules);

            $adds = Address::where('user_id', Auth::id())->first();
            if(!$adds){
                Address::create($arr);
            } else{
                Address::where('user_id', Auth::id())->update($arr);
            }

            \DB::commit();
            return $this->success('Success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    protected function guard()
    {
        return Auth::guard('user');
    }

    public function ajaxRequest(Request $request){

        $userID = $this->getUserID();

        if($request->type == 'price'){
            return Product::getProductPrice($request->ref, Auth::user()->name ?? '');
        }

        if($request->type == 'login'){

            $auth = false;
            $attr = $request->validate([
                'name'      => 'required|string',
                'password'  => 'required|string|min:6'
            ]);

            $email = filter_var( $request->get('name'), FILTER_VALIDATE_EMAIL );
            if($email && Auth::guard('user')->attempt(['email' => $email, 'password' => $request->password])){
                $auth = true;
            }
            elseif (Auth::guard('user')->attempt($attr)) {
                $auth = true;
            }

            if($auth){
                // update cart
                Cart::where('user_id', Auth::id())->delete();
                $cart = Cart::where('user_id', $userID)->get();

                foreach ($cart as $c){
                    Cart::where('id', $c->id)->update([
                        'user_id'       => Auth::id(),
                        'unit_price'    => Product::getProductPrice($c->product_type_id, Auth::user()->name)
                    ]);
                }

                return $this->success('Success');
            }

            return $this->error('Credentials not match', 401);
        }

        if($request->type == 'addCart'){

            $qty = intval($request->qty);

            // if product type id exists, else update cart only
            if($request->ref){

                // remove this product if 0
                if($request->qty != null && $qty == 0){
                    Cart::where('id', $request->ref)->delete();
                }
                else{
                    $this->validate($request, [
                        'ref' => 'required|exists:product_type,id',
                        'qty' => 'between:-1,99'
                    ]);

                    $cart = Cart::where('user_id', $userID)
                        ->where('product_type_id', $request->ref)
                        ->first();

                    if($cart){
                        $qty = !$qty ? 1 : $qty;
                        // minus quantity
                        if($qty < 0){
                            Cart::where('id', $cart->id)->decrement('quantity', 1);
                        } else{
                            Cart::where('id', $cart->id)->increment('quantity', intval($qty));
                        }
                    }
                    else{
                        $data       = ProductType::where('id', $request->ref)->first();
                        $username   = Auth::check() ?? Auth::user()->name ?? '';

                        $arr = [
                            'user_id'           => $userID,
                            'product_id'        => $data->product_id,
                            'product_type_id'   => $request->ref,
                            'unit_price'        => Product::getProductPrice($request->ref, $username)
                        ];

                        if($qty > 0){
                            $arr['quantity'] = $qty;
                        }
                        Cart::create($arr);
                    }
                }
            }

            $cart = Cart::where('user_id', $userID)->get();

            // delete inactive product
            foreach ($cart as $c){
                $exists = ProductType::find($c->product_type_id);
                if(!$exists) Cart::where('id', $c->cart_id)->delete();
            }

            $cart = Cart::where('user_id', $userID)
                ->orderBy('product_id', 'desc')
                ->orderBy('created_at', 'desc')
                ->get();

            return response()->json([
                'html' => view('user.include.cart.index', compact('cart'))->render()
            ]);
        }

        if($request->type == 'area'){
            $output = [];
            $data = Location::getAreaList($request->ref);
            foreach( $data as $d ) {
                $output[$d] = ucfirst(str_replace("_"," ",$d));
            }
            return $output;
        }

        // check username or referral username
        if($request->type == 'name' || $request->type == 'referral_username'){
            $data = User::where('name', $request->ref)->first();
            if($data) return $data;
            return $this->error('user not found!', 401);
        }


    }
}
