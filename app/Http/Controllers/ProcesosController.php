<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actuacion;
use App\Models\Audiencia;
use App\Models\Cliente;
use App\Models\Proceso;
use Carbon\Carbon;

class ProcesosController extends Controller
{
    public function ver(Request $request) {
        $proceso = Proceso::where('id', $request['id'])->with('clientes')->with(array('actuaciones' => function($query){
            $query->orderBy('fecha','desc');
        }))->with('users')->get();

        $audiencias = Audiencia::where('procesos_id', $request['id'])->orderBy('fecha', 'desc')->limit(1)->get();

        if($audiencias->count() > 0) {
            $now = Carbon::parse(Carbon::now()->toDateString());
            $fecha_audiencia = Carbon::parse($audiencias[0]->fecha);

            if ($fecha_audiencia > $now) {
                $proxima_audiencia = $fecha_audiencia->diffInDays($now);
            } else if ($fecha_audiencia < $now) {
                $proxima_audiencia = NULL;
            } else {
                $proxima_audiencia = 'Hoy';
            }
        }

        return view('proceso', ['id' => $request['id'], 'proceso' => $proceso, 'proxima_audiencia' => $proxima_audiencia ?? NULL]);
    }

    public function validar(Request $request) {
        $proceso = Proceso::where('id', $request['id'])->where('codigo', $request['codigo'])->get();

        if ($proceso->count() == 1) {
            session(['proceso' => $request['codigo']]);
        }

        return redirect()->back();
    }
}
