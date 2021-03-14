<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
//use http\Env\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;

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
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function username()
    {
        return 'login';
    }

    /*public function showLoginForm() {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $str = substr(str_shuffle($permitted_chars), 0, 8);
        //qgo53krx
        //$2y$10$cIN2ZhF2p9wyJjVYSApPN.knYPBY7l0aKyAFEYZ/MjGLqLUSKsiCS
        dump($str);
        dump(Hash::make($str));
    }*/

    /*public function login(Request $request) {
        dump('5688');

        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required',
        ]);
        die();
    }*/
}
