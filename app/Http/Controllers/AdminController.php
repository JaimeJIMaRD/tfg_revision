<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\File;
use App\Models\Personaje;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function createPersonaje()
    {
        return view('admin.personaje_add');
    }

    public function index()
    {
        $personajes = Personaje::all();
        return view('admin.personaje_index', compact('personajes'));
    }

    public function storePersonaje(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'serie' => 'required|string|max:255',
            'muestra' => 'nullable|file|max:10240', // Establece el tamaño máximo del archivo en bytes (10MB)
            'imagen_logo' => 'nullable|file|max:10240', // Tamaño máximo de 10MB para la imagen del logo
            'imagen_fondo' => 'nullable|file|max:10240', // Tamaño máximo de 10MB para la imagen de fondo
            'actor_id' => 'required|integer|exists:actor,id', // Ajusta el nombre de la tabla de actores según sea necesario
        ]);

        $input = $request->all();

        try {
            $actor = Actor::findOrFail($input['actor_id']);

            $personaje = new Personaje([
                'nombre' => $request->nombre,
                'serie' => $request->serie,
                'actor_id' => $request->actor_id,
            ]);

            $personaje->save();

            // Sube los archivos y los asocia con el personaje
            $this->uploadAndAssociateFile($request->file('muestra'), 'muestra', $personaje);
            $this->uploadAndAssociateFile($request->file('imagen_logo'), 'imagen_logo', $personaje);
            $this->uploadAndAssociateFile($request->file('imagen_fondo'), 'imagen_fondo', $personaje);

            return redirect()->route('index')->withSuccess('Personaje creado exitosamente');
        } catch (\Exception $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }
    }


    private function uploadAndAssociateFile($file, $fieldName, $personaje)
    {
        if ($file) {
            // Sube el archivo y guarda su información en la tabla 'files'
            $fileModel = new File();
            $fileModel->name = $file->getClientOriginalName();
            $fileModel->file_path = $file->store('uploads'); // Almacena el archivo en la carpeta 'uploads' (puedes ajustar según sea necesario)
            $fileModel->save();

            // Asocia el archivo con el personaje
            $personaje->{$fieldName . '_id'} = $fileModel->id;
            $personaje->save();
        }
    }



}
