<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

// Rutas para el controlador de libros
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');//Muestra todos los libros
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');//Muestra el formulario para crear un nuevo libro
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');//Guarda un nuevo libro
Route::get('/libros/{libro}', [LibroController::class, 'show'])->name('libros.show');//Muestra el libro
Route::get('/libros/{libro}/edit', [LibroController::class, 'edit'])->name('libros.edit');//Muestra el formulario para editar el libro
Route::put('/libros/{libro}', [LibroController::class, 'update'])->name('libros.update');//Actualiza el libro
Route::delete('/libros/{libro}', [LibroController::class, 'destroy'])->name('libros.destroy');//Borra el libro