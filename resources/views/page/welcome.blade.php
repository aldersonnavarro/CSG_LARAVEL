<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>C.S.G Contratistas Generales</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endif
</head>
<body class="antialiased">
    <header>
        <nav class="bg-blue-500 p-4">
            <div class="container mx-auto">
                <ul class="flex space-x-4">
                    <li><a href="{{ url('/') }}" class="text-white">Inicio</a></li>
                    <li><a href="{{ route('nosotros') }}" class="text-white">Nosotros</a></li>
                    <li><a href="{{ route('servicios') }}" class="text-white">Servicios</a></li>
                    <li><a href="{{ route('clientes') }}" class="text-white">Clientes</a></li>
                    <li><a href="{{ route('proyectos') }}" class="text-white">Proyectos</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-white">Contáctanos</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-4">Bienvenido a C.S.G Contratistas Generales</h1>
        <p class="mb-4">Somos expertos en trabajos de carpintería metálica y construcción. Ofrecemos una amplia gama de servicios de calidad para satisfacer tus necesidades.</p>
        <img src="{{ asset('imagenes/bienvenido.jpg') }}" alt="Bienvenido" class="rounded-lg shadow-lg">
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} C.S.G Contratistas Generales. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</body>
</html>
