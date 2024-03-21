<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Prestamo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    // Método para mostrar el formulario de nuevo préstamo
    public function create()
    {
        $librosDisponibles = Libro::where('disponible', 1)->get(); // Obtiene todos los libros disponibles
        return view('prestamos.create', compact('librosDisponibles')); // Pasa los libros disponibles a la vista
    }

    //Metodo para procesar los datos enviados desde el formulario del nuevo préstamo
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:libros,id',
        ]);

        $libro = Libro::find($request->book_id);

        if ($libro && $libro->disponible) {
            try {
                DB::beginTransaction();

                Prestamo::create([
                    'user_id' => 1, // O auth()->id() cuando implementes la autenticación
                    'book_id' => $request->book_id,
                    'fecha_prestamo' => now(),
                    'fecha_devolucion' => now()->addDays(7),
                ]);

                //  actualizar el estado del libro
                $libro->disponible = 0;
                $libro->save();

                DB::commit();
                return redirect('/libros')->with('success', 'Préstamo creado exitosamente.');
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('error', 'Ocurrió un error al crear el préstamo.');
            }
        } else {
            return back()->with('error', 'El libro seleccionado no está disponible.');
        }
    }
    /**
     * Muestra todos los libros que se han prestado
     */
    
    public function index()
    {
        $prestamos = Prestamo::with('libro')->orderBy('id', 'desc')->get();

        return view('prestamos.index', compact('prestamos'));
    }
    //Actualizar el estado del libro a disponible
    public function finalizar($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $libro = $prestamo->libro;

        if ($libro) {
            $libro->disponible = 1; // Marcar como disponible
            $libro->save();

            // Aquí puedes agregar lógica adicional si necesitas actualizar algo más en el préstamo
        }

        return redirect()->route('prestamos.index')->with('success', 'Préstamo finalizado y libro marcado como disponible.');
    }

    /**
     * Muestra el libro que se ha prestado
     */
    public function show($id)
    {
        $prestamo = Prestamo::with('libro')->findOrFail($id);

        return view('prestamos.show', compact('prestamo'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
