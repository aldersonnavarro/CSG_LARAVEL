<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    // Vista pública para mostrar servicios
    public function index()
    {
        $servicios = Servicio::all();
        return view('page.servicios', compact('servicios'));
    }

    // Vista de administración para listar todos los servicios (acceso solo para administradores)
    public function adminIndex()
{
    $servicios = Servicio::all();
    return view('servicios.adminIndex', compact('servicios'));  // Cambiado a 'servicios.adminIndex'
}

    // Mostrar formulario de creación de un nuevo servicio
    public function create()
    {
        return view('servicios.create');
    }

    // Guardar un nuevo servicio en la base de datos
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required|numeric',
    ]);

    Servicio::create($request->all());

    return redirect()->route('servicios.admin.index')->with('success', 'Servicio creado correctamente.');
}


    // Mostrar detalles de un servicio específico
    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    // Mostrar formulario de edición de un servicio existente
    public function edit(Servicio $servicio)
    {
        return view('servicios.edit', compact('servicio'));
    }

    // Actualizar un servicio en la base de datos
    public function update(Request $request, Servicio $servicio)
    {
        $request->validate([
            'nombre' => 'required',         // Cambiado 'name' a 'nombre'
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ]);

        $servicio->update($request->all());

        return redirect()->route('servicios.admin.index')->with('success', 'Servicio actualizado correctamente.');
    }

    // Eliminar un servicio de la base de datos
    public function destroy(Servicio $servicio)
    {
        $servicio->delete();

        return redirect()->route('servicios.admin.index')->with('success', 'Servicio eliminado correctamente.');
    }
}
