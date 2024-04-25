<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Location; 
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all states from the states table
        $states = State::all();

        // Pass the states data to the view
        return view('locations', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCitiesByState(Request $request)
    {
        $stateName = $request->input('state_name');
        $cities = City::where('state', $stateName)->get();
        return response()->json(['cities' => $cities]);
    }

    public function storeLocation(Request $request)
    {
        // Validate the request data (you can customize this according to your needs)
        $validatedData = $request->validate([
            'state_name' => 'required|string',
            'city_name' => 'required|string',
            'location_name' => 'required|string',
        ]);

        // Check if the city already exists in the locations table
        $existingLocation = Location::where('city', $request->city_name)->first();
        if ($existingLocation) {
            // If the city already exists, return an error response
            return response()->json(['error' => 'City already exists in locations'], 422);
        }

        // Create a new Location instance
        $location = new Location();
        $location->state = $request->state_name;
        $location->city = $request->city_name;
        $location->location_name = $request->location_name;

        // Save the location data
        $location->save();

        // Return a success response
        return response()->json(['message' => 'Location saved successfully'], 200);
    }

    public function getLocations()
    {
        $locations = Location::orderBy('created_at', 'desc')->get();
        return response()->json(['locations' => $locations]);
    }

}
