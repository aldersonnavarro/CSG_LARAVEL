<?php

namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;

class SistemaLevadizoController extends Controller
{
    public function index()
    {
        return view('servicios.sistema_levadizo'); // Asegúrate de crear esta vista
    }
}
