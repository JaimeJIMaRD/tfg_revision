<?php

namespace App\Http\Controllers;

use App\Models\Elenco;
use App\Models\Gusta;
use App\Models\Papel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ElencoController extends Controller
{
    public function index()
    {
        $elencos = Elenco::all();
        $user = Auth::user();
        $likeStatus = [];

        foreach ($elencos as $elenco) {
            $likeStatus[$elenco->id] = $user ? $user->gustas()->where('elenco_id', $elenco->id)->exists() : false;
        }

        return view('elenco.index', compact('elencos', 'likeStatus'));
    }


    public function create()
    {
        return view('elenco.create');
    }

    public function guardarElenco(Request $request)
    {
        $user = Auth::user();
        $elenco = new Elenco();
        $elenco->titulo = $request->input('nombre_elenco');
        $elenco->descripcion = $request->input('descripcion_elenco');
        $elenco->imagen = $request->input('imagen_elenco');
        $elenco->user_id = $user->id;
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

    public function like($id)
    {
        $user = Auth::user();
        $elenco = Elenco::findOrFail($id);

        // Verificar si el usuario ya ha dado like a este elenco
        $existingLike = $user->gustas()->where('elenco_id', $id)->first();

        if ($existingLike) {
            // Si ya existe un like, eliminarlo
            $existingLike->delete();
        } else {
            // Si no existe un like, crear uno nuevo
            $like = new Gusta();
            $like->user_id = $user->id;
            $like->elenco_id = $elenco->id;
            $like->save();
        }

        // Retorna la cantidad total de likes actualizada
        return $elenco->gustas()->count();
    }

}
