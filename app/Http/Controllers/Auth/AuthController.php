<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
      protected $redirectTo = '/';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'nama_pengguna' => 'required|max:255',
    //         'email_pengguna' => 'required|email|max:255|unique:pengguna',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'nama_pengguna' => $data['nama_pengguna'],
    //         'email_pengguna' => $data['email_pengguna'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }

    /**
     * Override method AuthenticatesUsers.php
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function loginUsername()
    {
        return property_exists($this, 'nama_pengguna') ? $this->nama_pengguna : 'email_pengguna';
    }

    public function register() {
        return redirect('/');
    }

    // public function showRegistrationForm() {
    //     return redirect('/');
    // }

    // public function showLoginForm()
    // {
    //     if(!session()->has('from')){
    //         session()->put('from', url()->previous());
    //     }
    //     return view('auth.login');
    // }

    public function authenticated($request,$user)
    {
        return redirect(session()->pull('from',$this->redirectTo));
    }
}
