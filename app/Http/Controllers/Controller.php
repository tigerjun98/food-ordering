<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Meta;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $path = 'admin.components.datatable.body';

    public function __construct(Request $request)
    {
        $this->getReferralName($request);
    }

    public function getUserID(){
        if(Auth::check() == true){
            $userID = Auth::user()->id;
        } else{
            $userID = Session::get('userID');
            if(!$userID){
                $userID = abs( crc32( uniqid() ) );
                Session::put('userID', $userID);
            } elseif(User::find($userID)){
                $userID = abs( crc32( uniqid() ) );
                Session::put('userID', $userID);
            }
        }
        return $userID;
    }

    public function getReferralName(Request $request){

        if(Auth::check()){
            return Auth::user()->referral->name;
        }

        if($request->get('referral')){
            Session::put('referral', $request->get('referral'));
            Session::put('referral_url', request()->headers->get('referer'));
            return $request->get('referral');
        }

        if(Session::get('referral')){
            return Session::get('referral');
        }

        return null;
    }

}
