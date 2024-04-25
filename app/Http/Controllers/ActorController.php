<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actor = Actor::orderBy('apellido')->get()->groupBy(function($item) {
            return strtoupper(substr($item->apellido, 0, 1));
        });
        return view('actor.index', compact('actor'));
    }

    public function show($id)
    {
        $actor = Actor::findOrFail($id);
        $actor->actores_recurrentes = json_decode($actor->actores_recurrentes);
        $personajes = $actor->personajes;

        return view('actor.show', compact('actor', 'personajes'));
    }

}

