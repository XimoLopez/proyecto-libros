<x-app-layout>
    <div class="container">
        <h1>Mis Préstamos</h1>
        @if($prestamos->isEmpty())
            <p>No tienes préstamos activos.</p>
        @else
        <ul>
            @foreach ($prestamos as $prestamo)
                <li>
                    {{ $prestamo->libro->titulo }} - Devolver antes de: {{ $prestamo->fecha_devolucion->format('d/m/Y H:i') }} - Devuelto: {{ $prestamo->devuelto ? 'Sí' : 'No' }}
                </li>
            @endforeach
        </ul>
        @endif
    </div>
</x-app-layout>
