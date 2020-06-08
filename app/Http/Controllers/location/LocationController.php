<?php

namespace App\Http\Controllers\location;

use App\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function loc()
    {
        $locations = Location::all();
        return view('admin.not')->with('locations', $locations);
    }
}
