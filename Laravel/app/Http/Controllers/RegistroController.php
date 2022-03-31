<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function listarinformacion(){
        $informacion = session('informacion');
        return view("informacion.listado", compact('informacion')); //pasamos parámetros a la vista
    }
    public function RegistrarProducto(){
        return view ('informacion.registrar');
    }

    public function guardar(Request $request){
        $valores = $request->all();
        $informacion = session('informacion');
        array_push($informacion, $valores);
        session(['informacion' => $informacion]);
        return redirect ('/listar-informacion');    
    }

    public function mostrar($cual){
        $informacion = session('informacion');
        $seleccionado = $informacion[$cual];
        return view("informacion.mostrar", compact ('seleccionado')); //para mostrar 1
    }

    public function editar($cual){
        $informacion = session('informacion');
        $seleccionado = $informacion[$cual];
        return view("informacion.editar", compact('seleccionado', 'cual'));
    }

    public function actualizar(Request $request, $cual){
        $informacion = session('informacion');
        $nueva_info = $request -> all();
        $informacion[$cual] = $nueva_info;
        session(['informacion' => $informacion]);
        return redirect('/listar-informacion');
    }

    public function borrar($cual){
        $informacion = session('informacion');
        unset ($informacion[$cual]);
        $nueva_info=[];
        foreach ($informacion as $info) {
            array_push($nueva_info, $info);
        }
        session(['informacion' => $nueva_info]);
        return redirect('/listar-informacion');


    }
}