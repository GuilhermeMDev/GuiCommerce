<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//breeze
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//my project
Route::get('/', [ProductController::class, 'index'])->name('index.index');
Route::get('/products', [ProductController::class, 'productsList'])->name('products.list');
Route::get('/products-search', [ProductController::class, 'productsSearch'])->name('products.search'); //quando o usuário busca por um produto especifico
Route::get('/product/{product:slug?}', [ProductController::class, 'show'])->name('product.show'); //Abre a pagino do produto selecionado

//teste vue
Route::get('/teste', [ProductController::class, 'teste'])->name('teste');

//only admin access painel
Route::middleware('permission:edit-products')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/create', [HomeController::class, 'create'])->name('product.create'); //exibir o formulario
    Route::post('/home/store', [HomeController::class, 'store'])->name('product.store'); //armazenar o produto no banco

    Route::get('/home/product/{product}/edit', [HomeController::class, 'edit'])->name('product.edit');//exibir o formulario
    Route::put('/home/product/{product}', [HomeController::class, 'update'])->name('product.update');//edita o produto no banco

    Route::get('/home/product/{product}/delete', [HomeController::class, 'destroy'])->name('product.destroy');//deletando
    Route::get('/home/product/{product}/delete-image', [HomeController::class, 'destroyImage'])->name('product.destroyImage');//deletando imagem

});

//Treinando Consumo API no Laravel
Route::get('/api', [ApiController::class, 'index'])->name('api.index');

require __DIR__ . '/auth.php';
