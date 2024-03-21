<?php

namespace App\Models;

use App\Models\Libro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';
    protected $fillable = ['user_id','book_id','fecha_prestamo','fecha_devolucion'];
    //Casteos de los campos fechas
    protected $casts = [
        'fecha_prestamo' => 'datetime',
        'fecha_devolucion' => 'datetime'
    ];

    public function libro()
{
    return $this->belongsTo(Libro::class, 'book_id');
}

}

