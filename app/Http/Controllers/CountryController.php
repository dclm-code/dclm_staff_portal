<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Country;
use App\Imports\CountriesImport;
use Auth;

class CountryController extends Controller
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
        $countries = Country::all();
        if($request->wantsJson()){
            return $countries;

        }else{
            return view('countries.country', compact('countries'));
        }
    }

    public function create(){
            return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Country::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Country successfully created."
            ], 201);
        }else{
            $info = "Country successfully created";
            $countries = Country::all();
            return view('countries.country',compact('info','countries'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Country $country)
    {
        if($request->wantsJson()){
            return $country;
        }else{
            return view('countries.view', compact('country'));
        }
    }

    public function edit(Country $country){
        return view('countries.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
            $country->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Country successfully updated.'], 200);
        }else{
            $info = "Country successfully updated.";
            $countries = Country::all();
            return view('countries.country',compact('info','countries'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Country $country)
    {
            $country->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Country  deleted successfully.'], 200);
        }else{
            $info = "Country  deleted successfully.";
            return view('countries.country', compact('info'));
        }
    }

    public function getFile()
    {
        return view('countries.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new CountriesImport, request()->file('country_file'));
        return redirect('countries.country');
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
