<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejercicio;
use App\Models\User;

class PagesController extends Controller
{


    public function index()
    {
        //
        $users=User::all();
        return view('inicio',compact('users'));

    }

    public function aboutUs()
    {
        //
        return view('aboutUs.blade');

    }


     //redirige a la pagina sign in
    public function signIn()
    {
        //
        return view('');
       
    }

    public function signUp()
    {
        return view('signUp');
    }

    public function forgotPassword()
    {

        return view('forgotPassword');
    }

    public function editClient($id)
    {
        /*
        retornar al cliente y sus entrenos para su modificacion
        por ejemplo una vista de sus datos,microciclo en el que se encuentra
        su RM historico,entre otros.
        */
        $editClient=User::find($id);
        return view('',compact(editClient));
    }


    public function createClient(Request $request)
    {
        //
        

        $cliente=new User;
        $cliente->name =$request-> Nombre;
        $cliente->apellido=$request->Apellido;
        $cliente->edad =$request->edad;
        $cliente->email=$request->Email;
        $cliente->password=$request->Contraseña;

        $cliente->save();
        return back()->with('success');
       
    }

     //aqui devolvera la vista dirigida al usuario
    public function showClientPage($id)
    {
       
        $user=User::find($id);
        return view('',compact('user'));

    }


     //devuelve una vista de todos los entrenamientos en curso
    Public function showClientWorkouts($id)
    {
        $workouts=Entreno::all()->where('user_id',$id);
        $user=User::find($id);
        return view('entrenamientos',compact('workouts','user'));
    }



}

