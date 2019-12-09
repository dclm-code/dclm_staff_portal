<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\GroupLga;
use App\Imports\GroupLgasImport;
use Auth;

class GroupLgaController extends Controller
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
        $group_lgas = GroupLga::all();
        if($request->wantsJson()){
            return $group_lgas;

        }else{
            return view('group_lgas.group_lga', compact('group_lgas'));
        }
    }

    public function create(){
        $states = \App\State::all();
    $regions = \App\Region::all();
        return view('group_lgas.create',compact('states','regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            GroupLga::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Group_lga successfully created."
            ], 201);
        }else{
            $info = "Group_lga successfully created";
            $group_lgas = GroupLga::all();
            return view('group_lgas.group_lga',compact('info','group_lgas'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupLga $group_lga
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, GroupLga $group_lga)
    {
        if($request->wantsJson()){
            return $group_lga;
        }else{
            return view('group_lgas.view', compact('group_lga'));
        }
    }

    public function edit(GroupLga $group_lga){
        $states = \App\State::all();
    $regions = \App\Region::all();
    return view('group_lgas.edit',compact('states','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupLga  $group_lga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupLga $group_lga)
    {
            $group_lga->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Group_lga successfully updated.'], 200);
        }else{
            $info = "Group_lga successfully updated.";
            $group_lgas = GroupLga::all();
            return view('group_lgas.group_lga',compact('info','group_lgas'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GroupLga  $group_lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GroupLga $group_lga)
    {
            $group_lga->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Group_lga  deleted successfully.'], 200);
        }else{
            $info = "Group_lga  deleted successfully.";
            return view('group_lgas.group_lga', compact('info'));
        }
    }

    public function getFile()
    {
        return view('group_lgas.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new Group_lgasImport, request()->file('group_lga_file'));
        return redirect('group_lgas.group_lga');
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
