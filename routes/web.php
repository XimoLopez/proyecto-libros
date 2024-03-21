<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

// Rutas para el controlador de libros
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index'); //Muestra todos los libros
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create'); //Muestra el formulario para crear un nuevo libro
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store'); //Guarda un nuevo libro
Route::get('/libros/{libro}', [LibroController::class, 'show'])->name('libros.show'); //Muestra el libro
Route::get('/libros/{libro}/edit', [LibroController::class, 'edit'])->name('libros.edit'); //Muestra el formulario para editar el libro
Route::put('/libros/{libro}', [LibroController::class, 'update'])->name('libros.update'); //Actualiza el libro
//Rutas para el controlador de prestamos
Route::get('/prestamos/create', [PrestamoController::class, 'create'])->name('prestamos.create');
Route::post('/prestamos', [PrestamoController::class, 'store'])->name('prestamos.store');
Route::get('/prestamos/finalizar/{id}', [PrestamoController::class, 'finalizar'])->name('prestamos.finalizar');
Route::get('/prestamos', [PrestamoController::class, 'index'])->name('prestamos.index');
Route::get('/prestamos/{id}', [PrestamoController::class, 'show'])->name('prestamos.show');


