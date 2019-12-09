<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\User;
use App\Imports\UsersImport;
use Auth;

class UserController extends Controller
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
        $users = User::all();
        if ($request->wantsJson()) {
            return $users;

        } else {
            return view('users.user', compact('users'));
        }
    }

    public function create() {
        $roles = \App\Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create($request->all());
        if ($request->wantsJson()) {
            return response()->json(
                ["info"=>"User successfully created."], 200
            );
        } else {
            $info = "User successfully created";
            $users = User::all();
            return view('users.user', compact('info', 'users'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        if ($request->wantsJson()) {
            return $user;
        } else {
            return view('users.view', compact('user'));
        }
    }

    public function edit(User $user)
    {
        $roles = \App\Role::all();
        return view('users.edit', compact('roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        if ($request->wantsJson()) {
            return response()->json(['info' => 'User successfully updated.'], 200);
        } else {
            $info = "User successfully updated.";
            $users = User::all();
            return view('users.user', compact('info', 'users'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        $user->delete();
        if ($request->wantsJson()) {
            return response()->json(['info' => 'User  deleted successfully.'], 200);
        } else {
            $info = "User  deleted successfully.";
            return view('users.user', compact('info'));
        }
    }

    public function getFile()
    {
        return view('users.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new UsersImport, request()->file('user_file'));
        return redirect('users.user');
    }



    /**
     * Add Business Logic function below here.
     *
     * Do not delete anything above.
     * Neither should you add anything above.
     * In other to keep every neat and functional.
     *
     * Happy coding...
     */

}
