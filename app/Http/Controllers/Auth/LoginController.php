<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//    public function login(){
//        return view('auth.login');
//    }
//    public function authenticated(Request $request, $user)
//    {
//        $request->validate([
//            'email'=>'required|string|email',
//            'password'=>'required|string',
//
//        ]);
//
//        $email = $request->email;
//        $password = $request->password();
//
////        $credentials = $request->only('email','password');
//        if(Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'1'])){
//            return redirect()->intended('home');
//        }elseif (Auth::attempt(['email'=>$email,'password'=>$password,'status'=>'0'])){
//            return redirect('login')->with(error,'You are a deactive User  ');
//        }else{
//            return redirect('login')->with(error,'Please enter valid credential ');
//        }
//            }
}
