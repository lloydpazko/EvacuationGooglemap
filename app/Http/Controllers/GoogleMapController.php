<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleMapController extends Controller
{
    public function google()
    {
        return view('LocatorMap.googlemap');
    }
}
