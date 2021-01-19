<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consulta;

class ConstultasController extends Controller
{
    public function solicitar_consulta(Request $request) {
        $data = $request->all();
        $data['fecha'] = date('Y-m-d');

        return Consulta::create($data);
    }
}
