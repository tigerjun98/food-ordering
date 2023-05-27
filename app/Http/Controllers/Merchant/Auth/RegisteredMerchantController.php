<?php

namespace App\Http\Controllers\Merchant\Auth;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use http\Env\Url;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredMerchantController extends Controller
{
    public function create()
    {
        return view('merchant.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|string|max:50',
            'last_name'     => 'required|string|max:50',
            'email'         => 'required|string|email|max:255|unique:merchants',
            'contact'       => 'required|string|max:14|unique:merchants',
            'password'      => ['required', 'confirmed', 'min:6'],
        ]);

        $merchant = Merchant::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email'         => $request->email,
            'contact'       => $request->contact,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('merchant')->login($merchant);

        return makeResponse(201, trans('common.operation_success'), [
            'redirect' => route('merchant.order.index')
        ]);
    }
}
