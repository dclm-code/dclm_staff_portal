<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\GradeLevel;
use App\Imports\GradeLevelsImport;
use Auth;

class GradeLevelController extends Controller
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
        $grade_levels = GradeLevel::all();
        if($request->wantsJson()){
            return $grade_levels;

        }else{
            return view('grade_levels.grade_level', compact('grade_levels'));
        }
    }

    public function create(){
            return view('grade_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            GradeLevel::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Grade_level successfully created."
            ], 201);
        }else{
            $info = "Grade_level successfully created";
            $grade_levels = GradeLevel::all();
            return view('grade_levels.grade_level',compact('info','grade_levels'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GradeLevel $grade_level
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, GradeLevel $grade_level)
    {
        if($request->wantsJson()){
            return $grade_level;
        }else{
            return view('grade_levels.view', compact('grade_level'));
        }
    }

    public function edit(GradeLevel $grade_level){
        return view('grade_levels.edit',compact('grade_level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GradeLevel  $grade_level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradeLevel $grade_level)
    {
            $grade_level->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Grade_level successfully updated.'], 200);
        }else{
            $info = "Grade_level successfully updated.";
            $grade_levels = GradeLevel::all();
            return view('grade_levels.grade_level',compact('info','grade_levels'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GradeLevel  $grade_level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GradeLevel $grade_level)
    {
            $grade_level->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Grade_level  deleted successfully.'], 200);
        }else{
            $info = "Grade_level  deleted successfully.";
            return view('grade_levels.grade_level', compact('info'));
        }
    }

    public function getFile()
    {
        return view('grade_levels.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Grade_levelsImport, request()->file('grade_level_file'));
        return redirect('grade_levels.grade_level');
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
