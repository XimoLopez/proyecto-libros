<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería</title>
    <!-- Enlace al archivo CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Encabezado de la página -->
    <header class="header">
        <div class="logo">
            <a href="{{ url('/libros') }}">Proyecto - Librería</a>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/libros') }}">Ver todos los libros</a></li>
                <li><a href="{{ url('/prestamos/create') }}">Añadir un prestamo</a></li>
                <li><a href="{{ url('/prestamos/') }}">Ver todos los prestamos</a></li>
                <!-- Aquí puedemos añadir más elementos al menú si es necesario -->
            </ul>
        </nav>
    </header>

    <!-- Contenedor principal -->
    <main>
        <div class="container">
        @yield('content')
        </div>
    </main>
    
</body>
</html>


