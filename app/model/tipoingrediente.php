<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class tipoingrediente extends Model
{
    public $table = "categoria";

    protected $fillable = ["nombre","pedido"];

    public $timestamps = false;
}
