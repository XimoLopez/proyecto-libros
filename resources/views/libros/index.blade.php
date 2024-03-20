@extends('layouts.app')

@section('content')
<div class="book-list-container">
    <h1>Libros</h1>
    <ul>
        @foreach ($libros as $libro)
            <li><a href="{{ route('libros.show', $libro) }}">{{ $libro->titulo }}</a></li>
        @endforeach
    </ul>
</div>
<!-- Botón para añadir un nuevo libro-->
<div class="add-book-button">
    <a href="{{ route('libros.create') }}" class="btn btn-primary">Añadir Libro</a>
</div>
@endsection
