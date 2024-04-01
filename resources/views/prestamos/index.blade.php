<x-app-layout>
    <div class="container">
         {{-- Usamos las clases de Taiwind para dar estilos a estos mensajes ya que hemos añadido Jetstream --}}
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p class="font-bold">Éxito</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <br>
        <h1>Préstamos</h1>
        @if($prestamos->isEmpty())
            <p>No tienes préstamos activos.</p>
        @else
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
        @endif
    </div>
</x-app-layout>
