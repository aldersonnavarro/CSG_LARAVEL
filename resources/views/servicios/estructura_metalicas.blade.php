{{-- resources/views/servicios/estructura_metalicas.blade.php --}}
@extends('layouts.app') <!-- Extiende de la plantilla principal -->

@section('title', 'Estructuras Metálicas') <!-- Título de la página -->

@section('content')
<main>
    <div class="servicio-header">
        <!-- Botón de regresar a la página principal de servicios -->
        <a href="{{ route('servicios.index') }}" class="btn regresar"><span>&larr;</span> Regresar</a>
        <h1>Nuestros Servicios</h1>
        <!-- Botón para contactar -->
        <a href="{{ route('contacto') }}" class="btn contacto">Solicitar Servicios</a>
    </div>

    <section>
        <!-- Contenido del servicio de estructuras metálicas -->
        <h1 class="servicio-title">Trabajos en Estructuras Metálicas</h1>
    <div class="servicio-content">
            <img src="{{ asset('imagenes/servicio3.png') }}" alt="Servicio de estructuras metálicas" class="servicio-img">
            <p class="servicio-description">
            C.S.G CONTRATISTAS GENERALES ofrece soluciones innovadoras y de alta calidad en la construcción de estructuras metálicas. Nuestros servicios abarcan desde el diseño y la fabricación hasta la instalación de estructuras metálicas para edificios comerciales, industriales y residenciales. Utilizamos acero de alta resistencia y técnicas de fabricación avanzadas para garantizar la durabilidad y la seguridad de cada estructura. Nuestro equipo de ingenieros y técnicos especializados trabaja en estrecha colaboración con los clientes para asegurar que cada proyecto cumpla con las especificaciones y requerimientos, ofreciendo soluciones personalizadas que optimizan el rendimiento y la eficiencia en la construcción.
            </p>

        <!-- Sección de Beneficios -->
        <div class="beneficios">
            <h2 class="beneficios-title">¿Por qué elegirnos?</h2>
            <ul class="beneficios-list">
                <li><i class="fas fa-check-circle"></i> Calidad garantizada en cada proyecto</li>
                <li><i class="fas fa-clock"></i> Entregas puntuales y compromiso</li>
                <li><i class="fas fa-hard-hat"></i> Equipo profesional y capacitado</li>
                <li><i class="fas fa-dollar-sign"></i> Relación costo-beneficio óptima</li>
            </ul>
        </div>
    </div>
    </section>
</main>
@endsection
