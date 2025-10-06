<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function Index()
    {
        $personas = Persona::all();
        return view("index", ["personas" => $personas]);
    }

    public function Insertar(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->post("nombre");
        $persona->apellido = $request->post("apellido");
        $persona->telefono = $request->post("telefono");
        $persona->save();
        return redirect("/")->with("personaAgregada", true);
    }
}
