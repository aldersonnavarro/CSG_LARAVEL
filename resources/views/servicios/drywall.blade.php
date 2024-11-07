{{-- resources/views/servicios/drywall.blade.php --}}
@extends('layouts.app') <!-- Extiende de la plantilla principal -->

@section('title', 'Servicio de Drywall') <!-- Título de la página -->

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
        <!-- Contenido del servicio drywall -->
        <h1 class="servicio-title">Trabajos en drywall</h1>
    <div class="servicio-content">
            <img src="{{ asset('imagenes/servicio1.png') }}" alt="Servicio de drywall" class="servicio-img">
            <p class="servicio-description">
            C.S.G CONTRATISTAS GENERALES se especializa en la instalación y construcción de sistemas de drywall, ofreciendo soluciones versátiles que se adaptan a diversas necesidades arquitectónicas. Nuestros servicios incluyen la creación de tabiques, cielorrasos y revestimientos, todo realizado con materiales de alta calidad y técnicas de vanguardia. Nuestro equipo de expertos garantiza resultados excepcionales en términos de acabado, durabilidad y funcionalidad, asegurando que cada proyecto cumpla con los más altos estándares de calidad y estética. Nos comprometemos a entregar cada trabajo en los plazos establecidos, proporcionando una experiencia de servicio eficiente y profesional.
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
