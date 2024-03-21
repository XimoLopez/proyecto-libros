@extends('layouts.app')

@section('content')
<div class="container">
    {{-- Formulario para editar el libro --}}
    <h1>Editar Libro</h1>
    <form method="POST" action="{{ route('libros.update', $libro) }}">
        @csrf
        @method('PUT') <!-- Especifica el método HTTP para la solicitud -->

        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $libro->titulo }}" required>
        </div>

        <div class="form-group">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}" required>
        </div>

        <div class="form-group">
            <label for="año_publicacion">Año de Publicación:</label>
            <input type="date" class="form-control" id="año_publicacion" name="año_publicacion" value="{{ $libro->año_publicacion->toDateString() }}" required>
        </div>

        <div class="form-group">
            <label for="genero">Género:</label>
            <input type="text" class="form-control" id="genero" name="genero" value="{{ $libro->genero }}" required>
        </div>

        <div class="form-group">
            <label for="disponible">Disponible:</label>
            <select class="form-control" id="disponible" name="disponible" required>
                <option value="1" {{ $libro->disponible ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ !$libro->disponible ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="add-book-button">
        <button type="submit" class="btn btn-primary">Actualizar Libro</button>
        </div>
    </form>
</div>
@endsection
