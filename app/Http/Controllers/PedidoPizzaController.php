<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\pedidopizza;

use Validator;

class PedidoPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $ordenes = pedidopizza::all();
            return response()-> json(
                                        [
                                        "ok"=>true,
                                        "data"=>$ordenes,
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
       
        $input = $request->all();

        $validator = Validator::make($input,[
             "IdPizza" =>'required|int',
             "IdFactura"=>'required|int',
             "Cantidad"=>'required|int',
             "PrecioU"=>'required|int',  
        ]);

        if ($validator->fails()) {
            return response()->json([
                'ok' => false,
                'error' => $validator->messages(),
            ]);
        }

        try {
            pedidopizza::create($input);
            $lastIDp = pedidopizza::select("idPedidopizza")
            ->where("IdFactura", $input['IdFactura'])
            ->First();

            return response()->json([
                "ok" => true,
                "mensaje" => "Se registro con exito",
                "lastIdClientef" => $lastIDp,
            ]);

        } catch (\Exception $ex) {
            return response()->json([
                "ok" => false,
                "error" => $ex->getMessage(),
            ]);
        }
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
