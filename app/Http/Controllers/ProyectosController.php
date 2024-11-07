<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index()
    {
        return view('page.Proyectos'); // Se asume que la vista se llamará "Proyectos.blade.php"
    }
}
