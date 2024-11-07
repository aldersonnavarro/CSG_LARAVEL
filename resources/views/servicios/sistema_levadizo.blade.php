{{-- resources/views/servicios/sistema_levadizo.blade.php --}}
@extends('layouts.app') <!-- Extiende de la plantilla principal -->

@section('title', 'Sistemas Levadizos') <!-- Título de la página -->

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
        <!-- Contenido del servicio de sistemas levadizos -->
        <h1 class="servicio-title">Trabajos en Sistemas Levadizos</h1>
    <div class="servicio-content">
            <img src="{{ asset('imagenes/servicio4.png') }}" alt="Servicio de sistemas levadizos" class="servicio-img">
            <p class="servicio-description">
                En C.S.G CONTRATISTAS GENERALES, nos especializamos en el diseño e instalación de sistemas levadizos, que son ideales para maximizar la funcionalidad y la eficiencia en espacios reducidos. Nuestros sistemas están diseñados para ser seguros, eficientes y adaptables, ofreciendo soluciones que se ajustan a las necesidades específicas de cada cliente. Utilizamos tecnología de punta para asegurar que nuestros sistemas sean fáciles de operar y mantengan un alto estándar de seguridad. Además, nuestro equipo de expertos se encarga de la instalación y el mantenimiento, garantizando que cada sistema funcione a la perfección y brinde la satisfacción total del cliente.
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
