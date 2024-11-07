{{-- resources/views/servicios/admin.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Servicios</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de tener tu CSS aquí -->
</head>
<body>
    <div class="container">
        <h1>Administración de Servicios</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->id }}</td>
                        <td>{{ $servicio->name }}</td>
                        <td>{{ $servicio->descripcion }}</td>
                        <td>{{ $servicio->precio }}</td>
                        <td>
                            <a href="{{ route('servicios.show', $servicio) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('servicios.create') }}" class="btn btn-success">Crear Nuevo Servicio</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Asegúrate de tener tu JavaScript aquí -->
</body>
</html>
