<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    use ApiResponser;

    public function index()
    {
        return view('admin.dashboard.index'); //ss
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }

    public function selectOption(Request $request){

        // check username or referral username
        if($request->type == 'name' || $request->type == 'referral_username'){
            $data = User::where('name', $request->ref)->first();
            $address = User::getAddress($request->ref);
            if($address){
                $data['state'] = $address['state'];
                $data['area'] = $address['area'];
                $data['address_1'] = $address['address_1'];
                $data['address_2'] = $address['address_2'];
                $data['postcode'] = $address['postcode'];
            }

            if($data) return $data;
            return $this->error('user not found!', 401);
        }


    }

    protected function guard()
    {
        return Auth::guard('user');
    }
}

