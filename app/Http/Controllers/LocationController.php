<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Location;
use App\Imports\LocationsImport;
use Auth;

class LocationController extends Controller
{
    /**
     * Return the currently login user
     * An instance of App\User model
     * @return App\User
     */
    protected function currentUser()
    {
        return Auth::guard('api')->user() ?? Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locations = Location::all();
        if($request->wantsJson()){
            return $locations;

        }else{
            return view('locations.location', compact('locations'));
        }
    }

    public function create(){
            return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Location::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Location successfully created."
            ], 201);
        }else{
            $info = "Location successfully created";
            $locations = Location::all();
            return view('locations.location',compact('info','locations'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Location $location)
    {
        if($request->wantsJson()){
            return $location;
        }else{
            return view('locations.view', compact('location'));
        }
    }

    public function edit(Location $location){
        return view('locations.edit',compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
            $location->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Location successfully updated.'], 200);
        }else{
            $info = "Location successfully updated.";
            $locations = Location::all();
            return view('locations.location',compact('info','locations'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Location $location)
    {
            $location->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Location  deleted successfully.'], 200);
        }else{
            $info = "Location  deleted successfully.";
            return view('locations.location', compact('info'));
        }
    }

    public function getFile()
    {
        return view('locations.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new LocationsImport, request()->file('location_file'));
        return redirect('locations.location');
    }



    /**
     *
     * Add Business Logic function below here.
     *
     * Do not delete anything above.
     * Neither should you add anything above.
     * In other to keep every neat and functional.
     *
     * Happy coding...
     *
     */

}
