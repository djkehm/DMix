<?php

namespace App\Http\Controllers;
use App\Models\SolicitudMIX;
use Illuminate\Http\Request;

class SolicitudMIXController extends Controller
{
    public function getSolicitudMIX(){
        //Equivalente a un select * from consolas
        $solicitudesMIX = SolicitudMIX::all();
        return $solicitudesMIX;
    }

    public function crearSolicitudMIX(Request $request){
        //Equivalente a un insert into bla bla
        $input = $request->all(); //Genera un arreglo con todo lo que mando la intefaz
        //Cuando hablo de interfaz hablo de javascript
        $solicitudMIX = new SolicitudMIX();
        $solicitudMIX->nombre = $input["nombre"];
        $solicitudMIX->dj = $input["dj"];
        $solicitudMIX->fecha = $input["fecha"];
        $solicitudMIX->estado = 'no';
        $solicitudMIX->descripcion = $input["descripcion"];

        $solicitudMIX->save();
        return $solicitudMIX;
    }

    public function eliminarSolicitudDJ(Request $request){
        $input = $request->all();
        $id = $input["id"];
        //Eloquent: El administrador de BD de Laravel se llama Eloquent
        //1. Ir a buscar el registro a la bd
        // $consola = App\Models\Consola::findOrFail(2)
        $solicitudMIX = SolicitudMIX::findOrFail($id);
        //2. Para eliminar llamo al metodo delete
        $solicitudMIX->delete(); //DELETE FROM consolas WHERE id=1
        return "ok";
    }

    public function actualizarSolicitudMIX(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $solicitudMIX = SolicitudMIX::findOrFail($id);
        $solicitudMIX->nombre = $input["nombre"];
        $solicitudMIX->dj = $input["dj"];
        $solicitudMIX->fecha = $input["fecha"];
        $solicitudMIX->estado = "no";
        $solicitudMIX->descrip = $input["descrip"];
        $solicitudMIX->save();
        return $solicitudMIX; 
    }
    public function getSolicitudesMIX(){
        //Equivalente a un select * from consolas
        $solicitud_mix = SolicitudMIX::all();
        return $solicitud_mix;
    }
}
