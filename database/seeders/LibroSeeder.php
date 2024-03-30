<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro; // Importa el modelo Libro

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'titulo' => 'El Señor de los Anillos',
            'autor' => 'J.R.R. Tolkien',
            'año_publicacion' => '1954-07-29',
            'genero' => 'Fantasía',
            'disponible' => true,
        ]);

        Libro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'año_publicacion' => '1949-06-08',
            'genero' => 'Ficción distópica',
            'disponible' => true,
        ]);

        Libro::create([
            'titulo' => 'Cien años de soledad',
            'autor' => 'Gabriel García Márquez',
            'año_publicacion' => '1967-05-30',
            'genero' => 'Realismo mágico',
            'disponible' => true,
        ]);

        Libro::create([
            'titulo' => 'La sombra del viento',
            'autor' => 'Carlos Ruiz Zafón',
            'año_publicacion' => '2001-01-01',
            'genero' => 'Novela',
            'disponible' => true,
        ]);

        Libro::create([
            'titulo' => 'Harry Potter y la piedra filosofal',
            'autor' => 'J.K. Rowling',
            'año_publicacion' => '1997-06-26',
            'genero' => 'Fantasía',
            'disponible' => true,
        ]);
        Libro::create([
            'titulo' => 'Pierde el miedo de Alquilar tu Inmueble',
            'autor' => 'Joaquin Lopez Crespo',
            'año_publicacion' => '2024-02-04',
            'genero' => 'Inmobiliario',
            'disponible' => true,
        ]);
    }
}
