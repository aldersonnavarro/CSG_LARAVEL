{{-- resources/views/page/proyectos.blade.php --}}
@extends('layouts.app')

@section('title', 'Nuestros Proyectos - C.S.G Contratistas Generales')

@section('content')
<div class="proyectos-container">
    <h1>Nuestros Proyectos</h1>
    <div class="proyectos-grid">
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto1.jpg') }}" alt="Proyecto 1">
            <p>EDIFICIO EL PINAR IV SAN BORJA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto2.jpg') }}" alt="Proyecto 2">
            <p>EDIFICIO LA PRADERA 1 SAN BORJA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto3.jpg') }}" alt="Proyecto 3">
            <p>EDIFICIO PINAR VI</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto4.jpg') }}" alt="Proyecto 4">
            <p>EDIFICIO EL PINAR III SAN BORJA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto5.jpg') }}" alt="Proyecto 5">
            <p>PINAR V SAN BORJA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto6.jpg') }}" alt="Proyecto 6">
            <p>RESIDENCIAL VENECIA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto7.jpg') }}" alt="Proyecto 7">
            <p>COLEGIO GRAN UNIDAD JOSE GRANDA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto8.jpg') }}" alt="Proyecto 8">
            <p>PLAZA LIMA SUR</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto9.jpg') }}" alt="Proyecto 9">
            <p>TOTTUS DOMINICO CALLAO</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto10.jpg') }}" alt="Proyecto 10">
            <p>PROMART ATE</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto11.jpg') }}" alt="Proyecto 11">
            <p>PASAMANO RAMPA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto12.jpg') }}" alt="Proyecto 12">
            <p>PLANTA VANGUARD ICA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto13.jpg') }}" alt="Proyecto 13">
            <p>ESCALERA METALICA</p>
        </div>
        <div class="proyecto">
            <img src="{{ asset('imagenes/proyecto14.jpg') }}" alt="Proyecto 14">
            <p>BARANDAS METALICAS</p>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
    <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
</footer>
@endsection
