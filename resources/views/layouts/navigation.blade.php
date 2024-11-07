<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo a la izquierda -->
            <div class="flex items-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('imagenes/logo.png') }}" alt="Logo de CSG Contratistas Generales" class="block h-9 w-auto" />
                </a>
            </div>

            <!-- Navigation Links centrados -->
            <div class="hidden space-x-8 sm:flex mx-auto">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('Inicio') }}
                </x-nav-link>
                <x-nav-link :href="route('nosotros')" :active="request()->routeIs('nosotros')">
                    {{ __('Nosotros') }}
                </x-nav-link>
                <x-nav-link :href="route('servicios.index')" :active="request()->routeIs('servicios.index')">
                    {{ __('Servicios') }}
                </x-nav-link>
                <x-nav-link :href="route('clientes')" :active="request()->routeIs('clientes')">
                    {{ __('Clientes') }}
                </x-nav-link>
                <x-nav-link :href="route('proyectos')" :active="request()->routeIs('proyectos')">
                    {{ __('Proyectos') }}
                </x-nav-link>
                <x-nav-link :href="route('contacto')" :active="request()->routeIs('contacto')">
                    {{ __('Contáctanos') }}
                </x-nav-link>
                
                <!-- Dropdown de administrador -->
                @auth
                <div @mouseover="open = true" @mouseleave="open = false" class="relative">
                    <button class="text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none">
                        {{ __('Administrador') }}
                    </button>
                    <div x-show="open" class="absolute left-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg">
                        <x-dropdown-link :href="route('servicios.admin.index')">
                            {{ __('Lista de Servicios') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('servicios.create')">
                            {{ __('Crear Servicio') }}
                        </x-dropdown-link>
                    </div>
                </div>
                @endauth
            </div>

            <!-- Autenticación o Enlaces de Usuario a la derecha -->
            <div class="hidden sm:flex sm:items-center">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <div class="space-x-4">
                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                            {{ __('Iniciar sesión') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                            {{ __('Registrarse') }}
                        </x-nav-link>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
