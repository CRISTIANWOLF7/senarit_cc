<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function show(){
        $cristian = \DB::select('select * from "Persona"."persona" limit 5');
        $mostrar = "";
        foreach ($cristian as $persona) {
            $mostrar = $mostrar .'-'. $persona->PrimerNombre;
        }
        return "visualizar ".$mostrar;
    }
}
