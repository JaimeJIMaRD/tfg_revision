<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $table = 'personaje';

    protected $fillable = [
        'nombre',
        'serie',
        'muestra',
        'imagen_logo',
        'imagen_fondo',
        'actor_id',
    ];

    public function actores()
    {
        return $this->BelongsTo(Actor::class);
    }

    public function otros_actores()
    {
        return $this->hasMany(Otro_Actor::class);
    }

    public function muestra()
    {
        return $this->belongsTo(File::class, 'muestra_id');
    }

    public function imagenLogo()
    {
        return $this->belongsTo(File::class, 'imagen_logo_id');
    }

    public function imagenFondo()
    {
        return $this->belongsTo(File::class, 'imagen_fondo_id');
    }
}
