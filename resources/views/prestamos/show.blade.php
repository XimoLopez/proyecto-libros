<x-app-layout>
    <div class="container">
        <h1>Detalle del Préstamo</h1>
        <p><strong>ID del Préstamo:</strong> {{ $prestamo->id }}</p>
        <p><strong>Libro:</strong> {{ $prestamo->libro->titulo }}</p>
        <p><strong>Autor:</strong> {{ $prestamo->libro->autor }}</p>
        <p><strong>Fecha de Préstamo:</strong> {{ $prestamo->fecha_prestamo->format('d/m/Y') }}</p>
        <p><strong>Fecha de Devolución:</strong> {{ $prestamo->fecha_devolucion ? $prestamo->fecha_devolucion->format('d/m/Y') : 'No especificada' }}</p>
        <div class="add-book-button">
        <a href="{{ route('prestamos.index') }}" class="btn btn-primary">Volver a la lista de préstamos</a>
        </div>
    </div>
</x-app-layout>
