{{-- resources/views/page/inicio.blade.php --}}
@extends('layouts.app')

@section('title', 'Inicio - CSG Contratistas Generales')

@section('content')
<main>
    <section class="intro">
        <div class="welcome-container">
            <div class="welcome-text">
                <h1>Bienvenidos a C.S.G Contratistas Generales</h1>
                <p>
                    En C.S.G Contratistas Generales, transformamos tus ideas en realidad a través de soluciones innovadoras en carpintería metálica. 
                    Con un equipo de expertos y con muchos años de experiencia en el sector, nos comprometemos a ofrecerte la más alta calidad y durabilidad en cada proyecto. 
                    Desde la fabricación de estructuras metálicas hasta trabajos personalizados, nuestra pasión por el diseño y la funcionalidad nos distingue.
                </p>
                <p>
                    Descubre cómo podemos ayudarte a crear estructuras robustas y elegantes que se adapten a tus necesidades. Tu satisfacción es nuestra prioridad.
                </p>
            </div>
            <img src="{{ asset('imagenes/bienvenido.jpg') }}" alt="Bienvenido" class="welcome-image">
        </div>

        <h2>Nuestras Especialidades</h2>
        <p class="specialties-intro">
            En C.S.G Contratistas Generales, nos especializamos en diversas áreas de la carpintería metálica. Nuestros servicios están diseñados para satisfacer las necesidades específicas de nuestros clientes y garantizar la máxima calidad en cada proyecto.
        </p>

        <div class="specialties">
            <div class="specialty-item">
                <h3>Fabricación de Estructuras Metálicas</h3>
                <p>Diseñamos y fabricamos estructuras metálicas resistentes y duraderas para cualquier tipo de edificación.</p>
            </div>
            <div class="specialty-item">
                <h3>Trabajos Personalizados</h3>
                <p>Instalamos drywall y fabricamos muebles en melamina, con acabados de alta calidad y diseños personalizados.</p>
            </div>
            <div class="specialty-item">
                <h3>Sistemas Levadizos</h3>
                <p>Instalamos sistemas levadizos eficientes y seguros, ideales para garages y espacios industriales, facilitando el acceso y optimizando el uso del espacio con diseño estético.</p>
            </div>
            <div class="specialty-item">
                <h3>Reparaciones y Mantenimiento</h3>
                <p>Ofrecemos servicios de reparación y mantenimiento para garantizar la longevidad de tus estructuras metálicas.</p>
            </div>
        </div>
    </section>
</main>
@endsection

@section('footer')
<footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
    <p>&copy; 2024 C.S.G Contratistas Generales. Todos los derechos reservados.</p>
</footer>
@endsection
