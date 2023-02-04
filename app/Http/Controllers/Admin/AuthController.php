<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiResponser;

class AuthController extends Controller {

    use ApiResponser;

//    public function __construct()
//    {
//        $this->middleware('guest:admin')->except('logout');
//    }

    public function login()
    {
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.home');
        }

        return view('admin.auth.login');
    }

    public function submitLogin(Request $request)
    {
        $attr = $request->validate([
            'name'      => 'required|string|min:5',
            'password'  => 'required|string|min:6'
        ]);

        if (Auth::guard('admin')->attempt($attr)) {
            $id = Admin::where('name', $request->name)->value('id');
            $this->adminLog('admin_login', ['id'=> $id]);
            return $this->success('Success');
        }

//        if (Auth::guard('admin')->attempt($attr)) {
//            return redirect()->route('admin.index');
//            return $this->success(['redirect'=> route('admin.index')]);
//        }

        return $this->error('Credentials not match', 401);

//        if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
//            $user = Admin::where('name', $request->input('name'))->first();
//            Auth::login($user);
//            return $this->success('Success');
//        }

//        $user = Admin::where('name', $request->input('name'))->first();
//        if ($user && Hash::check($request->input('password'), $user['password'])) {
//            Auth::login($user);
//            return $this->success('Success');
//        }


    }

    protected function guard()
    {
        return Auth::guard('admin');
    }
}
