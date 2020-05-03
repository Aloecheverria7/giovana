<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pizza extends Model
{
    public $table = "pizza";
    
    protected $fillable = ["Nombre", "Precio","Imagen","TipoPizafk", "Tamañofk", "ingredientefk"];
    public $timestamps = false;
}
    