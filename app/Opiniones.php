<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opiniones extends Model
{
    
    protected $fillable = ['opinion', 'id_ruta','calificacion'];
}
