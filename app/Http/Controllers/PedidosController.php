<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Pedidos;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = $this->mostrarPedido();
        return view('telas.pedidos', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telas.cadastropedidos');
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
            'numeromesa' => 'required',
            'nomecliente' => 'required',
            'comidas' => 'required',
            'bebidas' => 'required',
        ]);

        $pedidos = new Pedidos;

        $pedidos->numero_mesa = $request->numeromesa;
        $pedidos->nome_cliente = $request->nomecliente;
        $pedidos->comidas = $request->comidas;
        $pedidos->bebidas = $request->bebidas;
        $pedidos->observacoes = $request->observacoes;
        $pedidos->status = 0;
        
        $pedidos->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function mostrarPedido()
     {
        $mostrarpedido = DB::table('pedidos')->select('numero_mesa', 'nome_cliente', 'comidas', 'bebidas', 'observacoes', 'status')->get();

        return $mostrarpedido;
        // dd($mostrarpedido);
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
