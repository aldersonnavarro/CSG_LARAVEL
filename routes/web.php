<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Servicios\DrywallController;
use App\Http\Controllers\Servicios\EstructuraMetalicasController;
use App\Http\Controllers\Servicios\MelaminaController;
use App\Http\Controllers\Servicios\SistemaLevadizoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;

// Ruta para la página de inicio
Route::get('/', [InicioController::class, 'index'])->name('home');

// Ruta para el dashboard (si decides mantenerla)
Route::get('/dashboard', function () {
    return view('page.dashboard'); // Asegúrate de tener una vista 'dashboard.blade.php'
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para la página principal de servicios accesible a todos
Route::get('/servicios', [ServiciosController::class, 'index'])->name('servicios.index');

// Rutas para las demás páginas
Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes');
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos');
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/enviar', [ContactoController::class, 'enviarMensaje'])->name('contacto.enviar');

// Rutas para los servicios individuales
Route::get('/servicios/drywall', [DrywallController::class, 'index'])->name('servicios.drywall');
Route::get('/servicios/melamina', [MelaminaController::class, 'index'])->name('servicios.melamina');
Route::get('/servicios/estructura-metalica', [EstructuraMetalicasController::class, 'index'])->name('servicios.estructura-metalica');
Route::get('/servicios/sistema-levadizo', [SistemaLevadizoController::class, 'index'])->name('servicios.sistema-levadizo');

// Rutas para el sistema de autenticación
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Middleware para rutas autenticadas
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Rutas de perfil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas CRUD de servicios accesibles para cualquier usuario autenticado
Route::middleware(['auth'])->group(function () {
    Route::get('/servicios/admin', [ServiciosController::class, 'adminIndex'])->name('servicios.admin.index');
    Route::get('/servicios/create', [ServiciosController::class, 'create'])->name('servicios.create');
    Route::post('/servicios', [ServiciosController::class, 'store'])->name('servicios.store');
    Route::get('/servicios/{servicio}', [ServiciosController::class, 'show'])->name('servicios.show');
    Route::get('/servicios/{servicio}/edit', [ServiciosController::class, 'edit'])->name('servicios.edit');
    Route::put('/servicios/{servicio}', [ServiciosController::class, 'update'])->name('servicios.update');
    Route::delete('/servicios/{servicio}', [ServiciosController::class, 'destroy'])->name('servicios.destroy');
});

// Rutas para el sistema de autenticación (si la has configurado)
require __DIR__.'/auth.php';
