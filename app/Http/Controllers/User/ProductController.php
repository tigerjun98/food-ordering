<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductType;
//use Eusonlito\LaravelMeta\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Meta;

class ProductController extends Controller {

    public function __construct(Request $request)
    {
        Meta::set('url', \Illuminate\Support\Facades\Request::fullUrl());
        if($request->referral){
            Meta::set('description', 'Referred By '.(ucfirst($request->referral)));
        }
    }

    public function index(Request $request)
    {
        $data = Product::where('status', 0)->get();
        return view('user.product.index', compact('data'));
    }

    public function show(Request $request, $name)
    {
        $related = Product::where('status', 0)
            ->orderBy('created_at','desc')
            ->get();

        $data = Product::where('product_name', $name)->where('status', 0)->first();
        if(!$data) abort(404);
        if(isset($data->product_images[0])){
            Meta::set('title', $data->{'product_name_'.App::getLocale()}. ' - '. env('APP_NAME'));
            Meta::set('image', asset("storage/products/".$data->product_images[0]));
        }

        return view('user.product.view', compact('data', 'related'));
    }

    public function cart(Request $request, $id)
    {
        return view('user.product.view');
    }
}
