<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/consultas/solicitar', 'ConstultasController@solicitar_consulta');

Route::get('/procesos/ver/{id}', 'ProcesosController@ver');
Route::post('/procesos/validar', 'ProcesosController@validar');
