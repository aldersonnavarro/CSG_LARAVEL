<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto; // Asegurarse de incluir el modelo Contacto

class ContactoController extends Controller
{
    public function index()
    {
        return view('page.contacto'); // Muestra la vista de contacto
    }

    public function enviarMensaje(Request $request)
{
    // Validar el formulario de contacto
    $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        'email' => 'required|email|max:255',
        'telefono' => 'required|regex:/^9[0-9]{8}$/|max:9',
        'mensaje' => 'required|max:1000',
        'servicio' => 'required'
    ]);

    // Guardar los datos en la base de datos
    \App\Models\Mensaje::create($validatedData);

    // Redirigir con un mensaje de éxito
    return redirect('/contacto')->with('success', 'Mensaje enviado exitosamente.');
}

}