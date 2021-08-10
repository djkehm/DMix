<?php

namespace App\Http\Controllers;
use App\Models\SolicitudDJ;

use Illuminate\Http\Request;

class SolicitudesDJController extends Controller
{
    public function getSolicitudesDJ(){
        //Equivalente a un select * from consolas
        $solicitud_djs = SolicitudDJ::all();
        return $solicitud_djs;
    }

    public function crearSolicitudDJ(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $solicituddj = new SolicitudDJ();
        $solicituddj->nombre = $input["nombre"];
        $solicituddj->dj = $input["dj"];
        $solicituddj->email = $input["email"];
        $solicituddj->estado = 'no';
        $solicituddj->fecha = $input["fecha"];
        $solicituddj->descripcion = $input["descripcion"];

        $solicituddj->save();
        return $solicituddj;
    }

    public function eliminarSolicitudDJ(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $solicituddj = SolicitudDJ::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $solicituddj->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }

    public function actualizarSolicitudDJ(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $solicituddj = SolicitudDJ::findOrFail($id);
        $solicituddj->nombre = $input["nombre"];
        $solicituddj->dj = $input["dj"];
        $solicituddj->email = $input["email"];
        $solicituddj->fecha = $input["fecha"];
        $solicituddj->estado = $input["estado"];
        $solicituddj->descripcion = $input["descripcion"];
        $solicituddj->save();
        return $solicituddj; 
    }
}

