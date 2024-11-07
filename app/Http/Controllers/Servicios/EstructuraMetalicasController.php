<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;

class EstructuraMetalicasController extends Controller
{
    public function index()
    {
        return view('servicios.estructura_metalicas'); // Asegúrate de crear esta vista
    }
}
