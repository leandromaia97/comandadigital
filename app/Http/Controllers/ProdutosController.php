<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produtos;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = $this->mostrarProduto();
        return view('telas.produtos', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telas.cadastroprodutos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacao = $request->validate([
            'codigoproduto' => 'required',
            'nomeproduto' => 'required',
            'descricaoproduto' => 'required',
            'precoproduto' => 'required',
            'quantidadeproduto' =>'required',
            'entregaproduto' => 'required',
        ]);

        $produto = new Produtos;
        $produto->codigo_produto = $request->codigoproduto;
        $produto->nome = $request->nomeproduto;
        $produto->descricao = $request->descricaoproduto;
        $produto->preco = $request->precoproduto;
        $produto->quantidade = $request->quantidadeproduto;
        $produto->data_entrega = $request->entregaproduto;
        
        $produto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function mostrarProduto()
    {
       $mostrarproduto = DB::table('produtos')->select('codigo_produto', 'nome', 'descricao', 'preco', 'quantidade', 'data_entrega')->get();

       return $mostrarproduto;
       // dd($mostrarproduto);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
