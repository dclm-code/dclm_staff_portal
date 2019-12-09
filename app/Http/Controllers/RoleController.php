<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\Role;
use App\Imports\RolesImport;
use Auth;

class RoleController extends Controller
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
        $roles = Role::all();
        if($request->wantsJson()){
            return $roles;

        }else{
            return view('roles.role', compact('roles'));
        }
    }

    public function create(){
            return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            Role::create($request->all());
            if($request->wantsJson()){
                return response()->json([
                "info"=>"Role successfully created."
            ], 201);
        }else{
            $info = "Role successfully created";
            $roles = Role::all();
            return view('roles.role',compact('info','roles'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Role $role)
    {
        if($request->wantsJson()){
            return $role;
        }else{
            return view('roles.view', compact('role'));
        }
    }

    public function edit(Role $role){
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
            $role->update($request->all());
            if($request->wantsJson()){
            return response()->json(['info' => 'Role successfully updated.'], 200);
        }else{
            $info = "Role successfully updated.";
            $roles = Role::all();
            return view('roles.role',compact('info','roles'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Role $role)
    {
            $role->delete();
            if($request->wantsJson()){
            return response()->json(['info' => 'Role  deleted successfully.'], 200);
        }else{
            $info = "Role  deleted successfully.";
            return view('roles.role', compact('info'));
        }
    }

    public function getFile()
    {
        return view('roles.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new RolesImport, request()->file('role_file'));
        return redirect('roles.role');
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
