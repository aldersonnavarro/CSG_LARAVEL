<?php

// app/Http/Controllers/Servicios/DrywallController.php
namespace App\Http\Controllers\Servicios;

use App\Http\Controllers\Controller;

class DrywallController extends Controller
{
    public function index()
    {
        return view('servicios.drywall'); // Cargar la vista drywall.blade.php
    }
}
