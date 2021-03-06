<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
App::setLocale("es");

Auth::routes();
// Rutas del sistema de autentificacion, estan en un metodo aparte estatico, automatico
Route::get('/user/verify/{token}', 'App\Http\Controllers\Auth\RegisterController@verifyUser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');

Route::get('/',[PagesController::class,'welcome']);

Route::get('/currentClients',[PagesController::class,'currentClients']);

Route::get('/client/{id}/workout',[PagesController::class,'showClientWorkouts']);

Route::get('/insertWorkout',[PagesController::class,'insertWorkout']);

Route::post('/insertWorkouts', [PagesController::class,'insertWorkouts'])->name('insertWorkouts');

//Route::get('/workouts',[PagesController::class,'workouts']);

Route::get('/showorkouts',[PagesController::class,'showWorkouts']);

Route::get('/aboutUs', [PagesController::class,'aboutUs']);

Route::get('/logIn',[PagesController::class, 'logIn']);


