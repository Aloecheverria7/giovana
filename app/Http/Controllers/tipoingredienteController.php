<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use model\tipoingrediente;

class tipoingredienteController extends Controller
{
    public function select()
    {
        $ingrediente = tipoingrediente::all();

        return response()->json([
            "ok"=>true,
            "data"=>$ingrediente
        ]);
    }
}
