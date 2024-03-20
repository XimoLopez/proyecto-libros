<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titulo', 'autor', 'año_publicacion', 'genero', 'disponible'
    ];
    
    protected $table = 'libros';
    
    protected $casts = [
        'año_publicacion' => 'date', // Indica que año_publicacion es una fecha
    ];

}

