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
        //redirige a la pagina de inicio que es la de iniciar sesion
        return view('web/welcome');

    }

    public function insertWorkout()
    {
       
        $users=User::pluck('id','name');
        $workouts=Entreno::pluck('id','microciclo');
        $dayOfWeek=Entreno::pluck('id','dia_de_la_semana');
        return view('dashboard.workouts',compact('users','workouts','dayOfWeek'));
    }
    
    //inserta un nuevo ejercicio
    public function insertWorkouts(Request $request)
    {
   
     $input=$request->all();
     $nombre_ejercicio=$input['nombre_ejercicio'];
     $numero_sets=$input['set_id'];
     $numero_reps=$input['rep_id'];
     $marca_objetivo=$input['marca_id'];
     $observaciones=$input['observaciones'];


     //dd($input);

     $workout=Entreno::create(['user_id'=>$input['user_id'],
     'microciclo'=>$input['microciclo'],
     'dia_de_la_semana'=>"lunes"]);


     foreach($numero_sets as $num_sets=>$set)
        {
          $sets=Set::create(['numero_sets'=>$set]);
        }

          foreach($numero_reps as $num_reps=>$rep)
          {
            $reps=Rep::create(['numero_reps'=>$rep]);
          }


        foreach($marca_objetivo as $marca_obj=>$marca)
        {
                $marcas=Marca::create(['marca_objetivo'=>$marca]);
        }

     foreach($observaciones as $obervacion=>$observ)
     {
    
        $observa=$observ;

     }


     foreach($nombre_ejercicio as $nom_ejer=>$ejer)
      {
        

      }
   
        
      $exercise=Ejercicio::create(['nombre_ejercicio'=>$ejer,
      'observaciones'=>$observa,
      'entreno_id'=>$workout->id,
      'set_id'=>$sets->id,
      'rep_id'=>$reps->id,
     'marca_id'=>$marcas->id]);    
            
      

    }


    public function workout()
    {
        //redirige a la pagina de inicio que es la de iniciar sesion
        return view('web.workouts');

    }
    

    public function showWorkouts()
    {
        //redirige a la pagina de inicio que es la de iniciar sesion
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
        $workouts=Entreno::all()->where('user_id',$id);
        $user=User::find($id);
        return view('workouts',compact('workouts','user'));
    }



}

