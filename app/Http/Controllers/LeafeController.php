<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Leafe;
use App\Imports\LeavesImport;
use Auth;

class LeafeController extends Controller
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
        $leaves = Leafe::all();
        if($request->wantsJson()){
            return $leaves;

        }else{
            return view('leaves.leafe', compact('leaves'));
        }
    }

    public function create(){
            return view('leaves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Leafe::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Leafe successfully created."
            ], 201);
        }else{
            $info = "Leafe successfully created";
            $leaves = Leafe::all();
            return view('leaves.leafe',compact('info','leaves'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leafe $leafe
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Leafe $leafe)
    {
        if($request->wantsJson()){
            return $leafe;
        }else{
            return view('leaves.view', compact('leafe'));
        }
    }

    public function edit(Leafe $leafe){
        return view('leaves.edit',compact('leafe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leafe  $leafe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leafe $leafe)
    {
            $leafe->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Leafe successfully updated.'], 200);
        }else{
            $info = "Leafe successfully updated.";
            $leaves = Leafe::all();
            return view('leaves.leafe',compact('info','leaves'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leafe  $leafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Leafe $leafe)
    {
            $leafe->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Leafe  deleted successfully.'], 200);
        }else{
            $info = "Leafe  deleted successfully.";
            return view('leaves.leafe', compact('info'));
        }
    }

    public function getFile()
    {
        return view('leaves.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new LeavesImport, request()->file('leafe_file'));
        return redirect('leaves.leafe');
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
