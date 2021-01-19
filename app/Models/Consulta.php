<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'fecha', 'nombre', 'correo', 'telefono', 'asunto', 'mensaje'
    ];
}
