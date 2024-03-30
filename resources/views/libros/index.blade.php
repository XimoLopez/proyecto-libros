<x-app-layout>
<div class="container">
    {{-- Mensaje de éxito y de error --}}
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="error-message">{{ session('error') }}</div>
    @endif

    <div class="book-list-container">
        <h1>Libros</h1>
        <ul>
            @foreach ($libros as $libro)
                <li>
                    <div style="margin-bottom: 10px;">
                        <a href="{{ route('libros.show', $libro) }}">{{ $libro->titulo }}</a>
                        <span style="float: right; display: block; margin-top: 10px;">{{ $libro->disponible ? 'Disponible' : 'No Disponible' }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- Botón para añadir un nuevo libro-->
    <div class="add-book-button">
        <a href="{{ route('libros.create') }}" class="btn btn-primary">Añadir Libro</a>
    </div>
</div>
</x-app-layout>
