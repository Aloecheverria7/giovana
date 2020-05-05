<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pedidopizza extends Model
{
    public $table = "pedidopizza";
    
    protected $fillable = ["idPedidopizza","IdPizza", "IdFactura", "Cantidad", "PrecioU"];
    public $timestamps = false;

}
