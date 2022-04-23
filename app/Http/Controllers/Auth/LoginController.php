<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\DemoMail;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\VerifyUser;

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
 
        public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function showLoginForm()
    {
      return view('auth.login');
    }

    public function login()
    {
       //redirige a la pagina de inicio que es la de iniciar sesion
       return view('auth/login');

   }
   public function authenticated(Request $request, $user)
   {
       if (!$user->verified) {
           auth()->logout();
           return back()->with('warning', 'Necesitas confirmar tu cuenta. Te hemos enviado un enlace de activación, por favor mira tu email.');
       }
       return redirect('/logIn')->intended($this->redirectPath());
   }
}
