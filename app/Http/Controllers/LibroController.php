<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

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
     * Muestra el formulario para crear un nuevo libro
     */
    public function create(){
        return view('libros.create');
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
    return redirect('/libros')->with('success', 'Libro añadido correctamente.');
    }
    
    /**
     * Muestra el libro
     */
    public function show(Libro $libro){
        return view('libros.show', compact('libro'));
    }

    /**
     * Muestra el formulario para editar el libro
     */
    public function edit(Libro $libro){   
    return view('libros.edit', compact('libro'));
    }


    /**
     * Actualizar el libro
     */
    public function update(Request $request, Libro $libro){
        try {
        $validatedData = $request->validate([
          'titulo' => 'required',
              'autor' => 'required',
              'año_publicacion' => 'required',
              'genero' => 'required',
              'disponible' => 'required|boolean'
          ]);
  
          DB::beginTransaction();
  
          $libro->update($validatedData);
  
          DB::commit();
  
          return redirect('/libros')->with('success', 'Libro actualizado correctamente.');
      } catch (\Exception $e) {
          DB::rollBack();
          return redirect()->back()->with('error', 'Error al actualizar el libro. Por favor, inténtalo de nuevo.');
      }
  }
    /**
     * Borrar el libro
     */
    public function destroy(Libro $libro){
        $libro->delete();//Elimina el libro
        return redirect('/libros');//Redirige al usuario a la lista de libros
    }
}
