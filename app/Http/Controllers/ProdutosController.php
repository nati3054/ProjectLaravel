<?php

namespace App\Http\Controllers;
use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index(){
        $produtos = produto::paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($nome, $valor){
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);
        // if($valor == null){
        //     return "O nome do produto e $nome";
        // }
        // else{
        //     return "O nome do produto e $nome, e o seu valor e $valor";
        // }    
    }
}
