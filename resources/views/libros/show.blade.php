@extends('layouts.app')

@section('content')
<div class="libro-info">
    <h2>{{ $libro->titulo }}</h2>
    <p>Autor: <span>{{ $libro->autor }}</span></p>
    <p>Año de Publicación: <span>{{ $libro->año_publicacion->format('Y-m-d') }}</span></p>
    <p>Género: <span>{{ $libro->genero }}</span></p>
    <p>Disponible: <span>{{ $libro->disponible ? 'Sí' : 'No' }}</span></p>
</div>
<!-- Botón para editar el libro-->
<div class="add-book-button">
<a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-primary">Editar Libro</a>
</div>
@endsection

