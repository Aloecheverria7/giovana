<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $table = "cliente";
    
    protected $fillable = [ "NombreC","NumeroT", "Direccion", "FechaCreac", "NuemeroCliente"];
}
