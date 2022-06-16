<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejercicio;
use App\Models\User;
use App\Models\Entreno;
use App\Models\Set;
use App\Models\Rep;
use App\Models\Marca;
use App\Http\Controllers\ClientsController;
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
        return view('web/aboutUs');

    }


    public function welcome()
    {
        //redirige a la pagina de inicio
        return view('web/welcome');

    }

    //añade las opciones desplegables en la pagina de insercion de entrenamientos
    public function insertWorkout()
    {
       
        $users=User::pluck('id','name');
        $workouts=Entreno::pluck('id','microciclo');
        $dayOfWeek=Entreno::pluck('id','dia_de_la_semana');
        return view('dashboard.insertWorkout',compact('users','workouts','dayOfWeek'));
    }
    
    //inserta un nuevo ejercicio
    public function insertWorkouts(Request $request)
    {
   
     $user=$request->user_id;
     $microciclo=$request->microciclo;
     //$dia_de_la_semana=$request->dia_de_la_semana;
     $nombre_ejercicio=$request->nombre_ejercicio;
     $numero_sets=$request->set_id;
     $numero_reps=$request->rep_id;
     $marca_objetivo=$request->marca_id;
     $observaciones=$request->observaciones;


     $workout=Entreno::create(['user_id'=>$user,
         'microciclo'=>$microciclo,
         'dia_de_la_semana'=>"lunes"]);

     for($i=0;$i<count($nombre_ejercicio);$i++)
     {
         
       /*
         $set_data_save=['numero_sets'=>$numero_sets[$i]];
         $rep_data_save=['numero_reps'=>$numero_reps[$i]];
         $marca_data_save=['marca_objetivo'=>$marca_objetivo[$i]];
         $exercise_data_save=[
            'nombre_ejercicio'=>$nombre_ejercicio[$i],
            'set_id'=>$set->id,
            'rep_id'=>$numero_reps[$i]->id,
            'marca_id'=>$marca_objetivo[$i]->id
        ];

       */


         $set=Set::create(['numero_sets'=>$numero_sets[$i]]);

         $rep=Rep::create(['numero_reps'=>$numero_reps[$i]]);

         $marca=Marca::create(['marca_objetivo'=>$marca_objetivo[$i]]);

         $exercise=Ejercicio::create([
            'nombre_ejercicio'=>$nombre_ejercicio[$i],
            'entreno_id'=>$workout->id,
            'set_id'=>$set->id,
            'rep_id'=>$rep->id,
            'marca_id'=>$marca->id,
            'observaciones'=>$observaciones
         ]); 
         

     }

     return to_route("home");
 
    }


    public function currentClients()
    {
      //retorna la vista con un listado de los clientes
      $users=User::all();
      $workouts=User::find(1)->entrenos()->latest('id')->first();
        return view('web.currentClients',compact('users','workouts'));

    }
    

    public function showWorkouts()
    {
        
        return view('showWorkouts');

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
        $user=User::find($id);
        $workouts=User::find($id)->ejercicios
        ->where('entreno_id','1');
        //$sets=Set::find($workouts->set_id);
        
        foreach($workouts as $exercise)
        {

            $sets=Set::find($exercise->set_id)->get();
            
            
        }

        //dd($sets);
        return view('web.showWorkouts',compact('workouts','user','sets'));
    }



}

