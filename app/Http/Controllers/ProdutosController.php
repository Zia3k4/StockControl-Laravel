<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
{
    return response('Página não implementada', 404); // Ou qualquer outra resposta
}
    //public function index()
    /**
     *  @return \Illuminate\Http\Response
     * 
     */
    public function create(): View   
{
    return view('produtos.create');
}

     /**
     * @param \Illuminate\Http\Request  $request    
     * @return \Illuminate\Http\Response
     * 
     */ 
    public function store(Request $request)
    {
        //validacao
        $request->validate([
            'name' => 'required|min:2|max:50|unique:Produtos',
            ]);
            return response()->json(['message' => 'Produto criado com sucesso!'], 201);
    }
    public function buscarproduto(Request $request)
    {
        $codigo=$request -> input('');
        $produto=$request->input();
        return response()->json($produto);
}

}
    

