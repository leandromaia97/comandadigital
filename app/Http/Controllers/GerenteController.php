<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GerenteController extends Controller
{
    public function ViewGerente(){
        return view('telas.gerente');
    }
}
