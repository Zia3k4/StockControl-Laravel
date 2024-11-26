<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\ProdutosController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/',function (){
    return view('welcome');    

});

// Rotas para CRUD de produtos
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produtos.create');
// Rota para buscar produto
Route::post('/buscar-produto', [ProdutosController::class, 'buscarProduto'])->name('produtos.buscar');
//index
Route::get('/produtos/index', [ProdutosController::class, 'index'])->name('produtos.index');
//store obs, depois mudar o nome da referencia dp Produto.store para produtos.store
Route::post('/produtos', [ProdutosController::class, 'store'])->name('Produtos.store');

//  APAGAR OS COMENTATRIOS DEPOIS

