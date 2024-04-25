<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenido',
        'fecha',
        'elenco_id',
        'user_id',
    ];
    public function elencos()
    {
        return $this->BelongsTo(Elenco::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
