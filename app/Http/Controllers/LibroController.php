<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Mostar todos los libros
     */
    public function index(){
        $libros = Libro::all();
        return view('libros.index', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Guardar un nuevo libro
     */
    public function store(Request $request) {
    // Valida los datos del formulario. Cada campo es requerido y 'disponible' debe ser booleano.
    $validatedData = $request->validate([
        'titulo' => 'required', // El título es obligatorio.
        'autor' => 'required', // El autor es obligatorio.
        'año_publicacion' => 'required', // El año de publicación es obligatorio.
        'genero' => 'required', // El género es obligatorio.
        'disponible' => 'required|boolean' // 'Disponible' es obligatorio y debe ser un valor booleano.
    ]);
    // Crea un nuevo registro en la base de datos con los datos validados.
    Libro::create($validatedData);
    // Redirige al usuario a la lista de libros.
    return redirect('/libros');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Actualizar el libro
     */
    public function update(Request $request, Libro $libro){
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'año_publicacion' => 'required',
            'genero' => 'required',
            'disponible' => 'required|boolean'
        ]);
        $libro->update($validatedData);//Actualiza el libro
        return redirect('/libros');//Redirige al usuario a la lista de libros
    }
    /**
     * Borrar el libro
     */
    public function destroy(Libro $libro){
        $libro->delete();//Elimina el libro
        return redirect('/libros');//Redirige al usuario a la lista de libros
    }
}
