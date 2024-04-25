<?php

namespace App\Http\Controllers;

use App\Models\Elenco;
use App\Models\Papel;
use Illuminate\Http\Request;

class ElencoController extends Controller
{
    public function index()
    {
        $elencos = Elenco::all();
        return view('elenco.index', compact('elencos'));
    }

    public function create()
    {
        return view('elenco.create');
    }

    public function guardarElenco(Request $request)
    {
        $elenco = new Elenco();
        $elenco->titulo = $request->input('nombre_elenco');
        $elenco->descripcion = $request->input('descripcion_elenco');
        $elenco->imagen = $request->input('imagen_elenco');
        $elenco->user_id = 1;
        $elenco->save();

        foreach ($request->input('papeles') as $papelData) {
            $papel = new Papel();
            $papel->nombre = $papelData['personaje'];
            $papel->foto = $papelData['imagen'];
            $papel->nombre_actor = $papelData['actor'];
            $papel->actor_id = $papelData['actor_id'];
            $papel->elenco_id = $elenco->id;
            $papel->save();
        }
        return redirect()->route('elenco.index');
    }


    public function show($id)
    {
        $elenco = Elenco::findOrFail($id);
        return view('elenco.show', compact('elenco'));
    }

}
