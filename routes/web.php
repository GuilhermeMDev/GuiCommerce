<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/user/{user}', [UserController::class, 'showUser'])->name('user.show'); //este nome eu chamei dentro do body da blade por exemplo..
Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/projects', [ProjectController::class, 'index'])->name('project.index');
