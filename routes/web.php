<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\admin\AdminPersonajeController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\ElencoController;
use App\Http\Controllers\PersonajeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->group(function () {
    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/search', [ActorController::class, 'search'])->name('actors.search');
Route::get('/', [ActorController::class, 'index'])->name('index');
Route::get('actor/{id}', [ActorController::class, 'show'])->name('actor.show');
Route::get('/actor/name/{actor_id}', 'ActorController@getActorName');


Route::get('/personajes/create', [AdminPersonajeController::class, 'create'])->name('admin.personajes.create');
Route::post('/personajes/add', [AdminPersonajeController::class, 'store'])->name('admin.personajes.store');

Route::get('/personajes', [AdminPersonajeController::class, 'index'])->name('admin.personajes.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile.index');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('elenco/create', [ElencoController::class, 'create'])->name('elenco.create');;
    Route::get('elenco/{id}', [ElencoController::class, 'show'])->name('elenco.show');;
    Route::get('elenco/', [ElencoController::class, 'index'])->name('elenco.index');

    Route::post('elenco/store', [ElencoController::class, 'guardarElenco'])->name('guardar_elenco');
   // Route::patch('/elencos/{id}/like', [ElencoController::class, 'toggleLike'])->name('elencos.like');
    Route::post('/elenco/{id}/like', [ElencoController::class, 'like'])->name('elenco.like');

    Route::post('/comentarios', [ComentarioController::class, 'store'])->name('comentario.store');
    Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy'])->name('comentario.destroy');
});

require __DIR__.'/auth.php';
