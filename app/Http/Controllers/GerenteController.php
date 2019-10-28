<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function VerProdutos(){
        return view('telas.produtos');
    }
    
    public function CadastrarProduto(){
        return view('telas.cadastroprodutos');
    }
};
