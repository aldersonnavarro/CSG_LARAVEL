<!-- resources/views/servicios/adminIndex.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold mb-4">Lista de Servicios</h1>

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Descripción</th>
                <th class="py-2 px-4 border-b">Precio</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
            <tr>
                <td class="py-2 px-4 border-b">{{ $servicio->nombre }}</td>
                <td class="py-2 px-4 border-b">{{ $servicio->descripcion }}</td>
                <td class="py-2 px-4 border-b">S/. {{ number_format($servicio->precio, 2) }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-view">Ver</a>
                    <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-5">
        <a href="{{ route('servicios.create') }}" class="btn btn-success">Crear Nuevo Servicio</a>
    </div>
</div>
@endsection
