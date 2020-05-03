<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class detallepedido extends Model
{
    public $table = "detallepedido";
    
    protected $fillable = ["NumeroPedido", "cantidad", "subtotal","idPizza", "estadoPedido", "idTipoPedido"];
}
