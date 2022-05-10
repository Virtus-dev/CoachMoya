<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models;
use App\Models\Ejercicio;
use App\VerifyUser;
use App\Http\Controllers\Auth;

class ClientsController extends Controller
{
    
    public function findClient($id)
    {
        $user=Ejercicio::where('user_id'->$id)->ejercicios()->get();
        return $user;
    }


    
    public function storeClient(Request $request)
    {
        $cliente=new User;
        $cliente->name =$request-> name;
        $cliente->password=$request->password;
        $cliente->email=$request->email;

        $cliente->save();
        return back()->with('success');        
    }

    //Funcion para borrar un cliente de la base de datos
    public function deleteClient($id)
    {
        $deleteClient=User::find($id)->delete();
        
    }

    public function clientUpdate(Request $request,$id)
    {
        $clientUpdate=User::find($id);
        $clientUpdate->name = $request->name;
        $clientUpdate->apellido = $request->apellido;
        $clientUpdate->edad = $request->edad;
        $clientUpdate->email = $request->email;

        $clientUpdate->update();
        return back()->with('success');

    }
    
   

    public function updateWorkout(Request $request, $userId, $workoutId)
    {
        //variables para localizar el usuario y el entreno a modificar
        $usertUpdate=User::find($userId);
        $workoutUpdate=Entreno::find($workoutId);
        $workoutUpdate->ejercicio = $request->ejercicio;
        $workoutUpdate->sets = $request->sets;
        $workoutUpdate->reps = $request->reps;
        $workoutUpdate->marca = $request->marca;
        $workouUpdate->marcaCliente = $request->marcaCliente;
        
        $workoutUpdate->update();
        return back()->with('success');
    }



}
