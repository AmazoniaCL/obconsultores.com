<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audiencia extends Model
{
    protected $fillable = [
        'fecha', 'observaciones', 'procesos_id'
    ];
}
