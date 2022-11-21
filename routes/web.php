<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;

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

    return view('first');
});

//Treinando Consumo API no Laravel
Route::get('/api', [ApiController::class,'index'])->name('api.index');

Route::get('/login', function () {
    return view('login');
});



Auth::routes(); //ex

Route::get('/home', [HomeController::class, 'index'])->name('home');
