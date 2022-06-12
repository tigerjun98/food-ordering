<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use App\Models\User;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Queue\Middleware\RateLimited;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;

class HomeController extends Controller {

    use ApiResponser;

    public function faq(Request $request)
    {
        return view('user.home.faq');
    }
    public function aboutUs(Request $request)
    {
        return view('user.home.about-us');
    }

    public function privacyPolicy(Request $request)
    {
        return view('user.home.privacy-policy');
    }

    public function refundPolicy(Request $request)
    {
        return view('user.home.refund-policy');
    }

    public function contactUs(Request $request)
    {
        return view('user.home.contact-us');
    }

    public function contactByEmail(Request $request){

        $this->validate($request, [
            'name'      => 'required|min:3|max:50|regex:/^[\pL\s\-]+$/u',
            'email'     => 'required|email',
            'subject'   => 'required|min:3|max:50',
            'message'   => 'required|min:3|max:1000',
        ]);

        $details = [
            'title' => $request->subject,
            'body' => $request->message,
            'name' => $request->name,
            'email' => $request->email,
            'date' => Carbon::now(),
        ];

        $executed = RateLimiter::attempt(
            'send-message:'.$this->getUserID(), $perMinute = 1,
            function() use($details) {
                Mail::to(env('MAIL_USERNAME'))->send(new ContactUs($details));
            }
        );

        if (! $executed) {
            return $this->error(__('passwords.throttled'), 429);
        }

        return $this->success('', __('common.email_sent'), route('contactUs'));





    }

}
