<x-app-layout>
    <div class="container">
        <h1>Mis Préstamos</h1>
        <ul>
            @foreach ($prestamos as $prestamo)
                <li>{{ $prestamo->libro->titulo }} - Devolver antes de: {{ $prestamo->fecha_devolucion->format('d/m/Y') }}</li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
