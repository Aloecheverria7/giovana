<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    public $table = "factura";
    
    protected $fillable = ["idFactura", "idPedido","idTipoPedido","PrecioEnvio"];
    public $timestamps = false;
}
