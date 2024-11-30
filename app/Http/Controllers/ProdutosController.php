<?php

namespace App\Http\Controllers;
use App\Models\produto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\produtos;
use Laracasts\Flash\Flash;
//depois eu vejo se é necessario usar essa model aqui e configuarar as chamadas das variaveis


class ProdutosController extends Controller
{    /**
    * Exibe a lista de produtos.
    *
    * @return \Illuminate\View\View
    */
    public function index()  
     {
    $produtos = produtos::orderBy ('created_at','DESC')->get();
    return view('produtos.index', compact(var_name:'produtos'));
    //public function index()
    /**
     *  @return \Illuminate\Http\Response
     * 
     */
     }
     public function create() 
    {
        return view('produtos.create');
    }

     /**
     * @param \Illuminate\Http\Request  $request    
     * @return \Illuminate\Http\RedirectResponse
     * 
     */ 
    public function store(Request $request)
    {
        //validacao
        $request->validate([
        'descricao' => 'required|string|max:255',
        'preco' => 'required|numeric|min:0',
        'qtd_disponivel' => 'required|integer|min:0',
        'nota_fiscal' => 'required|string|max:255',
        'fornecedor_id' => 'required|exists:fornecedores,id',
    ]);
                 
    $produto = new produtos();

    $produto->descricao = $request->descricao; 
    $produto->preco = $request->preco; 
    $produto->qtd_disponivel = $request->qtd_disponivel;
    $produto->nota_fiscal = $request->nota_fiscal;
    $produto->fornecedor_id = $request->fornecedor_id;

    $produto->save(); 

    session()->flash('success', 'Produto criado com sucesso!');

    return back();
    }
    public function buscarproduto(Request $request)
    {
        $codigo=$request -> input('');
        $produto=$request->input();
        return response()->json($produto);
    } 

}
    

