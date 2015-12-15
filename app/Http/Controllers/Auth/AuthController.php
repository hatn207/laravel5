<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\LoginRequest;

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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    
    /**
     * This method is used to display form login
     *
     * @return type
     */
    public function getLogin()
    {
        return View('backend.auth.login');
    }
    
    /**
     * This method is used to display form login
     *
     * @return type
     */
    public function postLogin(LoginRequest $request)
    {
        $userName = $request->input('user_name');
        $password = $request->input('password');
        $remember = ($request->has('remember')) ? true : false;
        $isActive = User::STATUS_ACTIVE;
        $paramsLogin = ['user_name' => $userName, 'password' => $password, 'is_active' => $isActive];
        
        if (Auth::attempt($paramsLogin, $remember)){
            return redirect('/users/index');
        } else {
            return redirect()->route("backend.login");
        }
    }
    /**
     * This method is used to logout
     *
     * @return type
     */
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            //Remove all session
            session()->flush();
            return redirect()->route("backend.login");
        }
        
    }
}
