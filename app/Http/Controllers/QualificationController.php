<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Qualification;
use App\Imports\QualificationsImport;
use Auth;

class QualificationController extends Controller
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
        $qualifications = Qualification::all();
        if($request->wantsJson()){
            return $qualifications;

        }else{
            return view('qualifications.qualification', compact('qualifications'));
        }
    }

    public function create(){
            return view('qualifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Qualification::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Qualification successfully created."
            ], 201);
        }else{
            $info = "Qualification successfully created";
            $qualifications = Qualification::all();
            return view('qualifications.qualification',compact('info','qualifications'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Qualification $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Qualification $qualification)
    {
        if($request->wantsJson()){
            return $qualification;
        }else{
            return view('qualifications.view', compact('qualification'));
        }
    }

    public function edit(Qualification $qualification){
        return view('qualifications.edit',compact('qualification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Qualification $qualification)
    {
            $qualification->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Qualification successfully updated.'], 200);
        }else{
            $info = "Qualification successfully updated.";
            $qualifications = Qualification::all();
            return view('qualifications.qualification',compact('info','qualifications'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Qualification $qualification)
    {
            $qualification->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Qualification  deleted successfully.'], 200);
        }else{
            $info = "Qualification  deleted successfully.";
            return view('qualifications.qualification', compact('info'));
        }
    }

    public function getFile()
    {
        return view('qualifications.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new QualificationsImport, request()->file('qualification_file'));
        return redirect('qualifications.qualification');
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
