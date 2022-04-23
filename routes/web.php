<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ClientsController;
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

Route::get('/',[PagesController::class,'welcome']);

// Route::get('/signIn',[PagesController::class,'signIn']);

Route::get('/workouts',[PagesController::class,'workouts']);

Route::get('/aboutUs', [PagesController::class,'aboutUs']);

//Route::get('/signUp',[PagesController::class, 'signUp']);

Route::get('/logIn',[PagesController::class, 'logIn']);

Route::get('/register',[PagesController::class, 'register']);
/*
Route::post('/registrado', [ClientsController::class,'storeClient']);

Route::get('/signUp',[PagesController::class,'signUp']);
Route::post('/registrado', [ClientsController::class,'storeClient']);

*/
Route::get('/forgotPassword',[PagesController::class,'forgotPassword']);

Route::get('/noGrid',[PagesController::class,'noGrid']);



Route::post('/posts', 'PostsController@store');
// Rutas del sistema de autentificacion, estan en un metodo aparte estatico, automatico
Auth::routes();

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
