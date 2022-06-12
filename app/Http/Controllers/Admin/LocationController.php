<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class LocationController extends Controller
{
    public function getArea(Request $request)
    {
        return Location::getAreaList($request->state_id);
    }


}

