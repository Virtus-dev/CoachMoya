<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Models\Ejercicio;
use App\Models\Set;
use App\Models\Rep;

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




