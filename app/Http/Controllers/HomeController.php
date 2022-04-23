<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }  /** El middleware lo que hace es estar etre http request y response
    * filtra http request entrante, es un middleman entre las request y las respone como un firewall
    * en este caso verifica si el usuario de la app asta autentificado o no, y si esta autentificado lo redirige correctamente
    * y si no esta autentificado vuelve al log in. en este caso se applica a todas las rutas bajo HomeController*/



/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $email = Auth::user()->email;
        Mail::to($email)->send(new DemoMail());
        return view('home');
    }
}
