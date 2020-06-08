<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $locations = new Location();

        $locations->Latitude = $request->input('Latitude'); 
        $locations->Longitude = $request->input('Longitude');

        $locations->save();
        return response()->json($locations);
    }

    public function show()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function showbyid($id)
    {
        $locations = Location::find($id);
        return response()->json($locations);
    }

    public function updatebyid(Request $request, $id)
    {
        $locations = Location::find($id);
        $locations->Latitude = $request->input('Latitude');
        $locations->Longitude = $request->input('Longitude');

        $locations->save();
        return response()->json($locations);


    }

    public function deletebyid(Request $request, $id)
    {
        $locations = Location::find($id);
        $locations->delete();
        return response()->json($locations);
    }
}
