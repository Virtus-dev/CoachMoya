<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerifyMail;
use App\Models\User; 
use App\Models\VerifyUser;
use App\Models;

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
    protected $redirectTo = RouteServiceProvider::HOME;


    public function show()
    {
        return view('auth.register');
    }

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
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'age' => 'required|integer|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */

     
    protected function create(array $data)
    {
         $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'age' => $data['age'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);

        Mail::to($user->email)->send(new VerifyMail($user));

        return $user;
    }


    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $status = "Tu email esta verificado. Puedes iniciar sesión ahora.";
            }else{
                $status = "Tu email ya esta verificado. Puedes iniciar sesión ahora.";
            }
        }else{
            return redirect('/login')->with('warning', "Lo siento, tu email no ha podido ser verificado.");
        }

        return redirect('/login')->with('status', $status);
    }


    protected function registered(Request $request, $user)
    {
        $this->guard()->logout();
        return redirect('/login')->with('status', 'Hemos enviado un correo de confirmación, por favor, mira tu correo electronico.');
    }
 
    
}
