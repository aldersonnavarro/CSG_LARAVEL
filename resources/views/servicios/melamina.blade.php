{{-- resources/views/servicios/melamina.blade.php --}}
@extends('layouts.app') <!-- Extiende de la plantilla principal -->

@section('title', 'Servicio de Melamina') <!-- Título de la página -->

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
        <!-- Contenido del servicio melamina -->
        <h1 class="servicio-title">Trabajos en melamina</h1>
    <div class="servicio-content">
            <img src="{{ asset('imagenes/servicio2.png') }}" alt="Servicio de melamina" class="servicio-img">
            <p class="servicio-description">
            En C.S.G CONTRATISTAS GENERALES ofrecemos un servicio integral en la fabricación e instalación de muebles y estructuras en melamina, diseñados para optimizar el espacio y mejorar la estética de cualquier ambiente. Utilizamos materiales de primera calidad, con una amplia gama de acabados y diseños personalizables, adaptándonos a las necesidades específicas de nuestros clientes. Nuestro equipo altamente capacitado se encarga de cada detalle, desde el diseño hasta la instalación, asegurando que cada mueble no solo cumpla con su función, sino que también complemente la decoración y el estilo del espacio. Con un enfoque en la calidad y el servicio al cliente, garantizamos una experiencia excepcional en cada proyecto.
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
