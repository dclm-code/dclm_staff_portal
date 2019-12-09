<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Region;
use App\Imports\RegionsImport;
use Auth;

class RegionController extends Controller
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
        $regions = Region::all();
        if($request->wantsJson()){
            return $regions;

        }else{
            return view('regions.region', compact('regions'));
        }
    }

    public function create(){
        $states = \App\State::all();
        return view('regions.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Region::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Region successfully created."
            ], 201);
        }else{
            $info = "Region successfully created";
            $regions = Region::all();
            return view('regions.region',compact('info','regions'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Region $region)
    {
        if($request->wantsJson()){
            return $region;
        }else{
            return view('regions.view', compact('region'));
        }
    }

    public function edit(Region $region){
        $states = \App\State::all();
    return view('regions.edit',compact('states'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
            $region->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Region successfully updated.'], 200);
        }else{
            $info = "Region successfully updated.";
            $regions = Region::all();
            return view('regions.region',compact('info','regions'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Region $region)
    {
            $region->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Region  deleted successfully.'], 200);
        }else{
            $info = "Region  deleted successfully.";
            return view('regions.region', compact('info'));
        }
    }

    public function getFile()
    {
        return view('regions.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new RegionsImport, request()->file('region_file'));
        return redirect('regions.region');
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
