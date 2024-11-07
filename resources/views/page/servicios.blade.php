{{-- resources/views/page/servicios.blade.php --}}
@extends('layouts.app')

@section('title', 'Servicios - C.S.G Contratistas Generales')

@section('content')
<div class="servicio-container">
    <h1>Nuestros Servicios</h1>
    <div class="servicio-grid">
        <div class="servicio-card">
            <a href="{{ route('servicios.drywall') }}">
                <img src="{{ asset('imagenes/servicio1.png') }}" alt="Servicio 1">
            </a>
            <h3><a href="{{ route('servicios.drywall') }}">Trabajos en drywall</a></h3>
        </div>
        <div class="servicio-card">
            <a href="{{ route('servicios.melamina') }}">
                <img src="{{ asset('imagenes/servicio2.png') }}" alt="Servicio 2">
            </a>
            <h3><a href="{{ route('servicios.melamina') }}">Trabajos en melamina</a></h3>
        </div>
        <div class="servicio-card">
            <a href="{{ route('servicios.estructura-metalica') }}">
                <img src="{{ asset('imagenes/servicio3.png') }}" alt="Servicio 3">
            </a>
            <h3><a href="{{ route('servicios.estructura-metalica') }}">Estructuras metálicas</a></h3>
        </div>
        <div class="servicio-card">
            <a href="{{ route('servicios.sistema-levadizo') }}">
                <img src="{{ asset('imagenes/servicio4.png') }}" alt="Servicio 4">
            </a>
            <h3><a href="{{ route('servicios.sistema-levadizo') }}">Sistema levadizo</a></h3>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <footer>
        <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
    </footer>
@endsection
