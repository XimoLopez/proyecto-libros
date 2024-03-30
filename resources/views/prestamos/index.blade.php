<x-app-layout>
    <div class="container">
        <h1>Préstamos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libro</th>
                    <th>Fecha de Préstamo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $prestamo)
                <tr>
                    <td>{{ $prestamo->id }}</td>
                    {{-- Envuelve el título en un enlace a la vista de detalles del préstamo --}}
                    <td><a href="{{ route('prestamos.show', $prestamo->id) }}">{{ $prestamo->libro->titulo }}</a></td>
                    <td>{{ $prestamo->fecha_prestamo->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('prestamos.finalizar', $prestamo->id) }}" class="btn btn-danger">Finalizar Préstamo</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
