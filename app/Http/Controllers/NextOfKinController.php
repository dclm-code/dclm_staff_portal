<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\NextOfKin;
use App\Imports\NextOfKinsImport;
use Auth;

class NextOfKinController extends Controller
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
        $next_of_kins = NextOfKin::all();
        if($request->wantsJson()){
            return $next_of_kins;

        }else{
            return view('next_of_kins.next_of_kin', compact('next_of_kins'));
        }
    }

    public function create(){
            return view('next_of_kins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            NextOfKin::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Next_of_kin successfully created."
            ], 201);
        }else{
            $info = "Next_of_kin successfully created";
            $next_of_kins = NextOfKin::all();
            return view('next_of_kins.next_of_kin',compact('info','next_of_kins'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NextOfKin $next_of_kin
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, NextOfKin $next_of_kin)
    {
        if($request->wantsJson()){
            return $next_of_kin;
        }else{
            return view('next_of_kins.view', compact('next_of_kin'));
        }
    }

    public function edit(NextOfKin $next_of_kin){
        return view('next_of_kins.edit',compact('next_of_kin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NextOfKin  $next_of_kin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NextOfKin $next_of_kin)
    {
            $next_of_kin->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Next_of_kin successfully updated.'], 200);
        }else{
            $info = "Next_of_kin successfully updated.";
            $next_of_kins = NextOfKin::all();
            return view('next_of_kins.next_of_kin',compact('info','next_of_kins'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NextOfKin  $next_of_kin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, NextOfKin $next_of_kin)
    {
            $next_of_kin->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Next_of_kin  deleted successfully.'], 200);
        }else{
            $info = "Next_of_kin  deleted successfully.";
            return view('next_of_kins.next_of_kin', compact('info'));
        }
    }

    public function getFile()
    {
        return view('next_of_kins.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Next_of_kinsImport, request()->file('next_of_kin_file'));
        return redirect('next_of_kins.next_of_kin');
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
