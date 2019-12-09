<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Fuel;
use App\Imports\FuelsImport;
use Auth;

class FuelController extends Controller
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
        $fuels = Fuel::all();
        if($request->wantsJson()){
            return $fuels;

        }else{
            return view('fuels.fuel', compact('fuels'));
        }
    }

    public function create(){
        $departments = \App\Department::all();
        return view('fuels.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Fuel::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Fuel successfully created."
            ], 201);
        }else{
            $info = "Fuel successfully created";
            $fuels = Fuel::all();
            return view('fuels.fuel',compact('info','fuels'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuel $fuel
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Fuel $fuel)
    {
        if($request->wantsJson()){
            return $fuel;
        }else{
            return view('fuels.view', compact('fuel'));
        }
    }

    public function edit(Fuel $fuel){
        $departments = \App\Department::all();
    return view('fuels.edit',compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuel $fuel)
    {
            $fuel->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Fuel successfully updated.'], 200);
        }else{
            $info = "Fuel successfully updated.";
            $fuels = Fuel::all();
            return view('fuels.fuel',compact('info','fuels'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Fuel $fuel)
    {
            $fuel->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Fuel  deleted successfully.'], 200);
        }else{
            $info = "Fuel  deleted successfully.";
            return view('fuels.fuel', compact('info'));
        }
    }

    public function getFile()
    {
        return view('fuels.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new FuelsImport, request()->file('fuel_file'));
        return redirect('fuels.fuel');
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
