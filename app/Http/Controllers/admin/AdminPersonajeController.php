<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Personaje;
use Illuminate\Http\Request;

class AdminPersonajeController extends Controller
{
    public function create()
    {
        return view('admin.personaje_add');
    }

    public function index()
    {
        $personajes = Personaje::all();
        return view('admin.personaje_index', compact('personajes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'muestra' => 'nullable|string|max:255',
            'imagen_logo' => 'nullable|string|max:255',
            'imagen_fondo' => 'nullable|string|max:255',
            'actor_id' => 'required|integer|exists:actor,id',
        ]);

        $personaje = new Personaje([
            'nombre' => $request->nombre,
            'serie' => $request->serie,
            'muestra' => $request->muestra,
            'imagen_logo' => $request->imagen_logo,
            'imagen_fondo' => $request->imagen_fondo,
            'actor_id' => $request->actor_id,
        ]);

        $personaje->save();

        return redirect()->route('index');
    }
}
