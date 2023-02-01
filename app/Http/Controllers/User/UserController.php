<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Location;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Transaction;
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


            if($request->get('old_password') && $request->get('password')){

                $request->validate([
                    'old_password'  => 'required|min:6',
                    'password'      => 'required|confirmed|min:6'
                ]);

                if(!Hash::check($request->get('old_password'), Auth::user()->password)){
                    return $this->error(__('messages.incorrect_old_password'), 401);
                }

                $arr['password'] = Hash::make($request->get('password'));

            } else{
                $arr = [
                    'first_name'=> $request->get('first_name'),
                    'last_name' => $request->get('last_name'),
                    'phone'     => $request->get('phone'),
                    'email'     => $request->get('email'),
                    'name'      => Auth::user()->name,
                    'status'    => Auth::user()->status,
                ];
                $this->validate(new Request($arr), User::Rules(Auth::id()));
            }

            User::find(Auth::id())->update($arr);

            \DB::commit();
            return $this->success('', 'saved!');

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

        if($request->type == 'address'){
            return Transaction::getNetworkAddress($request->ref);
        }

        // check username or referral username
        if($request->type == 'name' || $request->type == 'referral_username'){
            $data = User::where('name', $request->ref)->first();
            if($data) return $data;
            return $this->error('user not found!', 401);
        }


    }
}
