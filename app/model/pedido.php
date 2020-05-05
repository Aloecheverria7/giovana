<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    public $table = "pedido";
    
    protected $fillable = ["idPedidoD","NombreC","NumeroT", "Direccion"];
    
    public $timestamps = false;
}
