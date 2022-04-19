<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class,'index']);

Route::get('/inicio', function () {
    $users=User::all();
    return view('grid.grid',compact($users)); 
});

Route::get('/entrenamientos', function () {
    $ejercicios=Ejercicio::all();
    return view('../entrenamientos',compact('ejercicios'));
});

Route::get('/registro',[PagesController::class,'registro']);

Route::post('/nuevoCliente', [PagesController::class,'store']);

Route::get('/Moya', function () {
    return view('../Moya');
});