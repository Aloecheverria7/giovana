<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\model\pizza;

use Validator;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Pizzas = pizza::select("pizza.*", "tipoingrediente.nombre as nombre_ingrediente", "tipopizza.nombre as tipo_pizza")
            ->join("tipoingrediente", "pizza.ingredientefk", "=", "tipoingrediente.idIngrediente")
            ->join("tipopizza", "pizza.TipoPizafk", "=", "tipopizza.idtipo")
            ->get();

        /*$Pizzas = pizza::all();*/
        return response()->
        json(
            
            [
                "ok"=>true,
                "data"=>$Pizzas,
                ] 
            );
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
