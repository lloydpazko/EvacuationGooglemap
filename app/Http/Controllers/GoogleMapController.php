<?php

namespace App\Http\Controllers;
use App\Models\location;
use Illuminate\Http\Request;

class GoogleMapController extends Controller
{
    public function google()
    {
        return view('LocatorMap.googlemap');
    }
    public function store(Request $request)
    {
        location::create([
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);
        return view('LocatorMap.googlemap');
    }
}
