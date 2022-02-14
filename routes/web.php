<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Models\Ejercicio;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',[PagesController::class, 'index'] );
Route::get('/aboutUS',[PagesController::class,'aboutUs']);
Route::get('/create', function(){
    $ejercicios=new Ejercicio;
    $ejercicios->Nombre_Ejercicio='Press banca';
    $ejercicios->Sets=4;
    $ejercicios->Reps=10;
    $ejercicios->Marca=200;
    $ejercicios->Marca_Cliente=180;
    $ejercicios->Observaciones="nada";
    $ejercicios->save();

});

Route::get('/xio',[PagesController::class,'create']);

