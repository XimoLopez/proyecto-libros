@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Añadir un nuevo libro</h1>
    <form method="POST" action="{{ route('libros.store') }}">
        @csrf <!-- Protección contra CSRF -->

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" required>
        </div>

        <div class="form-group">
            <label for="año_publicacion">Año de Publicación:</label>
            <input type="date" class="form-control" id="año_publicacion" name="año_publicacion" required>
        </div>

        <div class="form-group">
            <label for="genero">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>

        <div class="form-group">
            <label for="disponible">Disponible:</label>
            <select class="form-control" id="disponible" name="disponible" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Añadir Libro</button>
    </form>
</div>
@endsection
