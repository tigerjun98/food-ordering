<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\PasswordReset;
use DB;

class AuthController extends Controller {
    use ApiResponser;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function login()
    {
        if(Auth::guard('user')->check()){
            return redirect()->route('account');
        }
        return view('user.auth');
    }

    public function submitLogin(Request $request)
    {
        $attr = $request->validate([
            'name'      => 'required|string',
            'password'  => 'required|string|min:6'
        ]);

        $auth = false;

        $email = filter_var( $request->get('name'), FILTER_VALIDATE_EMAIL );
        if($email && Auth::guard('user')->attempt(['email' => $email, 'password' => $request->password])){
            $auth = true;
        }
        elseif (Auth::guard('user')->attempt($attr)) {
            $auth = true;
        }

        if($auth){
            return $this->success('Success');
        }

        return $this->error('Credentials not match', 401);

    }

    public function register()
    {
        return view('register');
    }

    public function submitRegister(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        try {
            \DB::beginTransaction();

            $referral = User::where('name', $this->getReferralName($request))->first();
            if(!$referral){
                Session::put('referral', 'origin');
                $referral = User::where('name', 'origin')->first();
            }

            $name = $request->get('first_name').'_'.rand(1231,9999);
            $arr = [
                'id'            => User::find($this->getUserID()) ? abs( crc32( uniqid() ) ) : $this->getUserID(),
                'referral_id'   => $referral->id,
                'referral_from' => Session::get('referral_url') ?? '',
                'first_name'    => $request->get('first_name'),
                'last_name'     => $request->get('last_name'),
                'name'          => $name,
                'email'         => $request->get('email'),
                'password'      => Hash::make($request->get('password')),
            ];
            $this->validate(new Request($arr), User::$rules);
            User::create($arr);

            \DB::commit();
            Auth::guard('user')->loginUsingId($this->getUserID());
            return $this->success('Success');

        } catch (\Exception $e) {
            \DB::rollback();
            return $this->error($e->getMessage(), 401);
        }
    }

    public function forgetPassword()
    {
        $type = 'forget';
        if(Auth::check()) Auth::logout();
        return view('user.auth.forget_password', compact('type'));
    }

    public function submitForgetPassword(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
        ]);

        //Create Password Reset Token
//        DB::table('password_resets')->insert([
//            'email'         => $request->email,
//            'token'         => Str::random(60),
//            'created_at'    => Carbon::now()
//        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? $this->success('', __($status))
            : $this->error(__($status), 401);
    }

    public function resetPassword()
    {
        $type = 'reset';
        if(Auth::check()) Auth::logout();

        return view('user.auth.forget_password', compact('type'));
    }

    public function submitResetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? $this->success('',  __($status).' Redirecting...', route('login'))
            : $this->error(__($status), 401);

    }


    protected function guard()
    {
        return Auth::guard('web');
    }
}
