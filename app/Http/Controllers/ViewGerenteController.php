<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewGerenteController extends Controller
{
    public function MostrarViewGerente(){
        return view('telas.gerente');
    }

    public function VerProdutos(){
        return view('telas.produtos');
    }

    public function CadastrarProduto(){
        return view('telas.cadastroprodutos');
    }

    public function VerMesas(){
        return view('telas.mesas');
    }

    public function CadastrarMesa(){
        return view('telas.cadastromesas');
    }

    public function CadastrarCozinha(){
        return view('telas.cadastrocozinha');
    }

    public function CadastrarGarcom(){
        return view('telas.cadastrogarcom');
    }

    public function VerGarcons(){
        return view('telas.garcom');
    }

    public function CadastrarPedidos(){
        return view('telas.cadastropedidos');

        $validacao = $request->validacao();
    }

    public function VerPedidos(){
        return view('telas.pedidos');
    }
}
