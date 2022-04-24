<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejercicio;
use App\Models\User;
use App\Models;
use App\Http\ClientsController;
use App\Http\Controllers\Auth;
use App\VerifyUser;

class PagesController extends Controller
{

    public function noGrid()
    {
        //redirige a la pagina de inicio que es la de iniciar sesion
        $users=User::all();
        return view('grid.noGrid',compact('users'));

    }

    public function aboutUs()
    {
        //redirige a la pagina sobre nosotros
        return view('aboutUs');

    }

    public function insertWorkout()
    {
        //redirige a la pagina sobre nosotros
        return view('insertWorkout');

    }

    public function welcome()
    {
        //redirige a la pagina de inicio que es la de iniciar sesion
        return view('welcome');

    }

    public function workouts()
    {
        //redirige a la pagina de inicio que es la de iniciar sesion
        return view('workouts');

    }

    public function logIn()
    {
       //redirige a la pagina de inicio que es la de iniciar sesion
       return view('auth/logIn');

   }

   public function register()
   {
      //redirige a la pagina de inicio que es la de iniciar sesion
      return view('auth/register');

  }

  public function forgotPassword()
  {

      return view('password/reset');
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
        return view('workouts',compact('workouts','user'));
    }



}

