<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use app\model\pizza;
use validator;

class pizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pizzas = pizza::select("pizza.Nombre", "pizza.precio", "tipopizza.nombre as tipo_pizza", "tipoingrediente.nombre as tipo_ingrediente", "tipotamaño.descripcion as tamaño")
        
        ->join("tipopizza", "pizza.TipoPizafk", "=", "tipopizza.idtipo")
        ->join("tipoingrediente", "pizza.ingredientefk", "=", "tipoingrediente.idIngrediente")
        ->join("tipotamaño", "pizza.Tamaño", "=", "tipotamaño.idTamano")
        ->get();

        return response()->json([
            "ok" => true,
            "data" => $Pizzas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
