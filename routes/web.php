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

Route::get('/', function () {
    return view('../inicio');
});

Route::get('/inicio', function () {
    return view('../inicio'); 
});

Route::get('/entrenamientos', function () {
    return view('../entrenamientos');
});

Route::get('/Moya', function () {
    return view('../Moya');
});

Route::get('/nuevousuario', function () {
    return view('/nuevousuario');
});
Route::post('/registrado', [PagesController::class,'store']);

Route::get('/contrasenaolvidada', function () {
    return view('../contrasenaolvidada');
});



Route::post('/posts', 'PostsController@store');
