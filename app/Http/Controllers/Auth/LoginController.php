<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ConfirmationEmail;
use Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'phone';
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            $user = $this->guard()->user();
            $user->generateToken();
            $user['role']= \App\Role::where('id', $user->id)->first();
            $user["details"] = \App\Staff::where('user_id', $user->id)->first();
            if (!empty($user['details'])) {
                $details = $user['details'];
                $user['qualification'] = \App\Qualification::where('id', $details->qualification_id)->get();
                $user['grade_level'] = \App\GradeLevel::where('id', $details->grade_level_id)->get();
                $user['next_kin'] = \App\NextOfKin::where('id', $details->next_of_kin_id)->get();
            }
            if ($request->wantsJson()) {
                return response()->json(
                    ["data"=>$user], 200
                );
            } else {
                return view('home', compact('user'));
            }
        }

    }
}
