<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Obtiene el usuario autenticado
        $prestamos = $user->prestamos()->with('libro')->orderBy('id', 'desc')->get(); // Recupera los préstamos del usuario junto con la información de los libros asociados

        return view('usuarios.prestamos', compact('prestamos')); // Retorna la vista con los préstamos
    }
}

