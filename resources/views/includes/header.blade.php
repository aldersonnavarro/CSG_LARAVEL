<header>
    <nav class="navbar">
        <!-- Logo alineado a la izquierda -->
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('imagenes/logo.png') }}" alt="Logo">
        </a>

        <!-- Barra de navegación -->
        <ul class="nav-links">
            <li><a href="{{ route('home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('nosotros') }}" class="{{ request()->is('nosotros') ? 'active' : '' }}">Nosotros</a></li>
            <li>
                <a href="{{ route('servicios.index') }}" class="{{ request()->is('servicios') ? 'active' : '' }}">Servicios</a>
                <div class="submenu">
                    <a href="{{ route('servicios.drywall') }}" class="{{ request()->is('servicios/drywall') ? 'active' : '' }}">Drywall</a>
                    <a href="{{ route('servicios.melamina') }}" class="{{ request()->is('servicios/melamina') ? 'active' : '' }}">Melamina</a>
                    <a href="{{ route('servicios.estructura-metalica') }}" class="{{ request()->is('servicios/estructura-metalica') ? 'active' : '' }}">Estr. Metálicas</a>
                    <a href="{{ route('servicios.sistema-levadizo') }}" class="{{ request()->is('servicios/sistema-levadizo') ? 'active' : '' }}">Sist. Levadizo</a>
                </div>
            </li>
            <li><a href="{{ route('clientes') }}" class="{{ request()->is('clientes') ? 'active' : '' }}">Clientes</a></li>
            <li><a href="{{ route('proyectos') }}" class="{{ request()->is('proyectos') ? 'active' : '' }}">Proyectos</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'active' : '' }}">Contáctanos</a></li>
        </ul>
    </nav>
</header>
