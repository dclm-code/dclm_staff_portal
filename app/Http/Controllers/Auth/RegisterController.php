<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make(
            $data, [
            'user_name' => ['required', 'string', 'max:32'],
            'phone' => ['required', 'string', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create(
            [
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'role_id' => \App\Role::where('role', $data['role'])->first()->id ?? 0,
            'password' => Hash::make($data['password']),
            ]
        );
    }

    protected function registered(Request $request, User $user)
    {
        if ($request->wantsJson()) {
            $user->rememberToken();
            Mail::to($user->email)->send(new ConfirmationEmail($user));
            return response()->json(
                [ "info" => "E-mail verification code sent to $user->email",
                "data" => $user->toArray()], 200
            );
        }
    }

    public function verifymail(Request $request)
    {
        $user = User::where('email', $request->email)
                ->where('remember_token', $request->verification_code)
                ->first();
        if ($user) {
            $user->email_verified_at = now();
            $user->status = '1';
            $user->save();
            return response()->json(
                [ 'info' => "Email validation successful."], 200
            );
        } else {
            return response()->json(
                [ 'info' => "There is an error, try again later."], 200
            );
        }
    }
}
