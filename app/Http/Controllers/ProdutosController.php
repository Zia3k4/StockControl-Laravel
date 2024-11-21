<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * display a listing of the resource
     * @return \Illuminate\Http\Response
     * 
     */
    public function index(): void
    {
        //
    }
   
    /**
     * return \Illluminate\Http\Response
     * 
     */
    public function create()
{
    return view('Produtos.create');
}

     /**
     * @param \Illuminate\Http\Request  $request    
     * @return \Illuminate\Http\Response
     * 
     */ 
    public function store(Request $request): void
    {
        //
    }

}
