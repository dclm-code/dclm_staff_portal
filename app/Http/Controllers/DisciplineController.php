<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Discipline;
use App\Imports\DisciplinesImport;
use Auth;

class DisciplineController extends Controller
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
        $disciplines = Discipline::all();
        if($request->wantsJson()){
            return $disciplines;

        }else{
            return view('disciplines.discipline', compact('disciplines'));
        }
    }

    public function create(){
        $staffs = \App\Staff::all();
        return view('disciplines.create',compact('staffs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Discipline::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Discipline successfully created."
            ], 201);
        }else{
            $info = "Discipline successfully created";
            $disciplines = Discipline::all();
            return view('disciplines.discipline',compact('info','disciplines'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Discipline $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Discipline $discipline)
    {
        if($request->wantsJson()){
            return $discipline;
        }else{
            return view('disciplines.view', compact('discipline'));
        }
    }

    public function edit(Discipline $discipline){
        $staffs = \App\Staff::all();
    return view('disciplines.edit',compact('staffs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discipline $discipline)
    {
            $discipline->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Discipline successfully updated.'], 200);
        }else{
            $info = "Discipline successfully updated.";
            $disciplines = Discipline::all();
            return view('disciplines.discipline',compact('info','disciplines'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Discipline $discipline)
    {
            $discipline->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Discipline  deleted successfully.'], 200);
        }else{
            $info = "Discipline  deleted successfully.";
            return view('disciplines.discipline', compact('info'));
        }
    }

    public function getFile()
    {
        return view('disciplines.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new DisciplinesImport, request()->file('discipline_file'));
        return redirect('disciplines.discipline');
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
