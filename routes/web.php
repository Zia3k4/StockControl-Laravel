<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\teste2;
use App\Http\Controllers\Testes;
use Illuminate\Support\Facades\Route;
use App\Controller\ProdutosController;
use app\Http\Resources\teste;
Route::get('/',function (){
    return view('welcome');    

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//produtos
Route::resource('/Produtos', \App\Http\Controllers\ProdutosController::class);


