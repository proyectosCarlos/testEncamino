<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
   // protected $table = 'rutas';
   protected $fillable = ['nombre', 'descripcion', 'moto','calificacion', 'latOrigen', 'lngOrigen','latFinal','lngFinal'];

}
