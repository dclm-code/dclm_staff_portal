<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Facades\Excel;
use App\State;
use App\Imports\StatesImport;
use Auth;

class StateController extends Controller
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
        $states = State::all();
        if ($request->wantsJson()) {
            return $states;

        } else {
            return view('states.state', compact('states'));
        }
    }

    public function create()
    {
        $countries = \App\Country::all();
        return view('states.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            State::create($request->all());
        if ($request->wantsJson()) {
            return response()->json(
                ["info"=>"State successfully created."], 200
            );
        } else {
            $info = "State successfully created";
            $states = State::all();
            return view('states.state', compact('info', 'states'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State $state
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, State $state)
    {
        if ($request->wantsJson()) {
            return $state;
        } else {
            return view('states.view', compact('state'));
        }
    }

    public function edit(State $state)
    {
        $countries = \App\Country::all();
        return view('states.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $state->update($request->all());
        if ($request->wantsJson()) {
            return response()->json(['info' => 'State successfully updated.'], 200);
        } else {
            $info = "State successfully updated.";
            $states = State::all();
            return view('states.state', compact('info', 'states'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, State $state)
    {
        $state->delete();
        if ($request->wantsJson()) {
            return response()->json(['info' => 'State  deleted successfully.'], 200);
        } else {
            $info = "State  deleted successfully.";
            return view('states.state', compact('info'));
        }
    }

    public function getFile()
    {
        return view('states.upload');
    }

    public function upload(Request $request)
    {
        Excel::import(new StatesImport, request()->file('state_file'));
        return redirect('states.state');
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
