@extends('layouts.app')

@section('title', 'Contactanos - CSG Contratistas Generales')

@section('content')
<div id="contacto">
    <h2>Contáctanos</h2>

    <!-- Mostrar mensaje de éxito si existe -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Mostrar mensajes de error si existen -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de contacto -->
    <form action="{{ route('contacto.enviar') }}" method="POST">
        @csrf

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>

        <div>
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="telefono">Teléfono:</label>
            <input
                type="tel"
                id="telefono"
                name="telefono"
                placeholder="987654321"
                pattern="9[0-9]{8}" 
                title="El número debe comenzar con 9 y tener un total de 9 dígitos."
                value="{{ old('telefono') }}"
                required
            >
        </div>

        <div>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="5" required>{{ old('mensaje') }}</textarea>
        </div>

        <div>
            <label for="servicio">Servicio de Interés:</label>
            <select id="servicio" name="servicio">
                <option value="drywall" {{ old('servicio') == 'drywall' ? 'selected' : '' }}>Drywall</option>
                <option value="melamina" {{ old('servicio') == 'melamina' ? 'selected' : '' }}>Melamina</option>
                <option value="estructua_metalica" {{ old('servicio') == 'estructua_metalica' ? 'selected' : '' }}>Estructua_metalica</option>
                <option value="sistemas_elevadizos" {{ old('servicio') == 'sistemas_elevadizos' ? 'selected' : '' }}>Sistemas Elevadizos</option>
                <option value="otros" {{ old('servicio') == 'otros' ? 'selected' : '' }}>Otros</option>
            </select>
        </div>

        <button type="submit">Enviar</button>
    </form>
</div>
@endsection
