<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Mesas;
use Illuminate\Support\Facades\DB;

class MesasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultado = $this->mostrarMesa();
        return view('telas.mesas', compact('resultado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('telas.cadastromesas');
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
            'codigomesa' => 'required',
            'capacidade' => 'required',
            'status' => 'required',
        ]);

        $mesas = new Mesas;
        $mesas->codigo_mesa = $request->codigomesa;
        $mesas->capacidade = $request->capacidade;
        $mesas->status = $request->status;
        $mesas->mesas_mescladas = $request->mesasmescladas;
        
        $mesas->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function mostrarMesa()
    {
       $mostrarmesa = DB::table('mesas')->select('codigo_mesa', 'capacidade', 'status', 'mesas_mescladas')->get();

       return $mostrarmesa;
       // dd($mostrarmesa);
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
