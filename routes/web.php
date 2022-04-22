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

Route::get('/',[PagesController::class,'index']);

Route::get('/inicio',[PagesController::class,'index']);

Route::get('/entrenamientos', function () {
    return view('../entrenamientos');
});

Route::get('/Moya', function () {
    return view('../Moya');
});

Route::get('/signUp',[PagesController::class,'signUp']);
Route::post('/registrado', [ClientsController::class,'storeClient']);

Route::get('/forgotPassword',[PagesController::class,'forgotPassword']);


