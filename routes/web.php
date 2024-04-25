<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\admin\AdminPersonajeController;
use App\Http\Controllers\ElencoController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', [ActorController::class, 'index'])->name('index');
Route::get('actor/{id}', [ActorController::class, 'show'])->name('actor.show');

Route::get('elenco/', [ElencoController::class, 'index'])->name('elenco.index');

Route::get('elenco/create', [ElencoController::class, 'create'])->name('elenco.create');;
Route::get('elenco/{id}', [ElencoController::class, 'show'])->name('elenco.show');;

Route::post('elenco/store', [ElencoController::class, 'guardarElenco'])->name('guardar_elenco');

Route::get('/personajes/create', [AdminPersonajeController::class, 'create'])->name('admin.personajes.create');
Route::post('/personajes/add', [AdminPersonajeController::class, 'store'])->name('admin.personajes.store');

Route::get('/personajes', [AdminPersonajeController::class, 'index'])->name('admin.personajes.index');



require __DIR__.'/auth.php';
