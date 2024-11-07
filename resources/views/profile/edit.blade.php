@extends('layouts.app')

@section('title', 'Perfil de Usuario')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-6">
        {{ __('Perfil de Usuario') }}
    </h2>

    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="p-6">
            <form method="POST" action="{{ route('profile.update') }}">
                @csrf
                @method('PUT')

                <!-- Nombre (solo lectura) -->
                <div class="mb-6">
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nombre
                    </label>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Este es su nombre registrado en la cuenta.</p>
                    <input id="name" type="text" value="{{ $user->name }}" readonly class="mt-1 block w-full border border-gray-300 bg-gray-100 rounded-md shadow-sm focus:border-gray-300 focus:ring-0 text-gray-600 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed">
                </div>

                <!-- Correo electrónico (solo lectura) -->
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Correo electrónico
                    </label>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Esta es la dirección de correo registrada en la cuenta.</p>
                    <input id="email" type="email" value="{{ $user->email }}" readonly class="mt-1 block w-full border border-gray-300 bg-gray-100 rounded-md shadow-sm focus:border-gray-300 focus:ring-0 text-gray-600 dark:bg-gray-700 dark:text-gray-300 cursor-not-allowed">
                </div>

                <!-- Campo de contraseña -->
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Nueva contraseña (opcional)
                    </label>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Si desea cambiar su contraseña, ingrésela aquí. De lo contrario, deje este campo en blanco.</p>
                    <input id="password" type="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirmación de nueva contraseña -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        Confirmar nueva contraseña
                    </label>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Repita la nueva contraseña para confirmarla.</p>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                </div>

                <!-- Botón para actualizar -->
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Actualizar Contraseña') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
