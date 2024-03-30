<x-app-layout>
    <div class="container">
        <h1>Añadir un Nuevo Préstamo</h1>
        <form action="{{ route('prestamos.store') }}" method="POST">
            @csrf {{-- Token CSRF para proteger tu formulario --}}
            <div class="form-group">
                <label for="book_id">Libro:</label>
                <select class="form-control" id="book_id" name="book_id">
                    @foreach($librosDisponibles as $libro)
                        <option value="{{ $libro->id }}" {{ request('libro') == $libro->id ? 'selected' : '' }}>{{ $libro->titulo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="add-book-button">
                <button type="submit" class="btn btn-primary">Añadir Préstamo</button>
            </div>
        </form>
    </div>
</x-app-layout>