<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\TestEBJob2;
use App\Jobs\TestJob;
use App\Models\User;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    use ApiResponser;

    public function testJob()
    {
//        TestJob::dispatch()->delay(Carbon::now()->addSeconds(10));
        TestEBJob2::dispatch();
        return makeResponse(200);
    }

    public function index()
    {
        return view('admin.dashboard.index');
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

