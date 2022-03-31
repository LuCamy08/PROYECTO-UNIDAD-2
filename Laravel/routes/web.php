<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;

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

Route::get('bienvenida', function () {
    return view('bienvenida');
});

Route::get('ver/{quien}', function($quien){
    echo "viendo $quien";
});

Route::get('/informacion', function(){
    $informacion=[
        
    ];
    session(['informacion' => $informacion]);
});

//CREATE *CREAMOS*
//C1.mostrar el formulario para obtener datos
Route::get('/informacion/registrar',[RegistroController::class,'RegistrarProducto']);

//C2.guardamos el registro de los productos
Route::post('/informacion/guardar',[RegistroController::class,'guardar']);

//RETRIVE
//Leemos uno por uno
Route::get('/informacion/mostrar/{cual}', [RegistroController::class,'mostrar']);

//Leemos todos los registros de la entidad
Route::get('/listar-informacion', [RegistroController::class, 'listarinformacion']);

//UPDATE
Route::get('/informacion/editar/{cual}',[RegistroController::class, 'editar']);
//Actualizamos
Route::put('/informacion/actualizar/{cual}',[RegistroController::class,'actualizar']);

//Delete *Eliminamos*
Route::delete('/informacion/borrar/{cual}', [RegistroController::class, 'borrar']);
