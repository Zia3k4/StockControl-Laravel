<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    
    protected $fillable = ['descricao', 'preco', 'qtd_disponivel', 'nota_fiscal', 'fornecedor_id']; 
    
    public $timestamps = true; 
}
