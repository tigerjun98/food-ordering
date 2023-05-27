<?php

namespace App\Http\Controllers\Merchant\Auth;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Admin;
use App\Http\Requests\Auth\LoginAdminRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\MerchantLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class MerchantAuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('merchant.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MerchantLoginRequest $request)
    {
        // $request['email'] =  \App\Models\Admin::all()->random()->email;

        $request->authenticate();

        $request->session()->regenerate();

        return makeResponse(201, 'Login success', [
            'redirect' => \route('merchant.order.index')
        ]);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('merchant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('merchant.login');
    }
}
