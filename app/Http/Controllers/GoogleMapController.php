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
            'location'=> $request->location,
            'address'=> $request->address,
            'capacity'=> $request->Capacity,
            'name'=>$request->name,
            'latitude'=>$request->lat,
            'longitude'=>$request->lng,
            'contact'=>$request->contact
        ]);
        return view('LocatorMap.googlemap');
    }
}
