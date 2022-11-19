<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

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
    $data = [
        'name' => 'Guilherme',
        'nickname' => 'GuiGui'
    ];

    return view('first',
    ['data' => $data]);
});

//Treinando Consumo API no Laravel
Route::get('/api', [ApiController::class,'index'])->name('api.index');

Route::get('/login', function () {
    return view('login');
});

Route::get('/user/{user}', [UserController::class, 'showUser'])->name('user.show'); //este nome eu chamei dentro do body da blade por exemplo..
Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/project/{project}', [ProjectController::class, 'showProject'])->name('project.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
