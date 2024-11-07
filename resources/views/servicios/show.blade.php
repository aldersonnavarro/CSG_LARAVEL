<!-- resources/views/servicios/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold mb-4">Detalles del Servicio</h1>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <h2 class="text-2xl font-bold mb-2">{{ $servicio->nombre }}</h2>
        <p class="mb-4"><strong>Descripción:</strong> {{ $servicio->descripcion }}</p>
        <p class="mb-4"><strong>Precio:</strong> S/. {{ number_format($servicio->precio, 2) }}</p>

        <div class="flex items-center justify-between">
            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar Servicio</a>
            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?');">Eliminar Servicio</button>
            </form>
        </div>
    </div>

    <a href="{{ route('servicios.admin.index') }}" class="text-blue-500 hover:underline">Regresar a la lista de servicios</a>
</div>
@endsection
