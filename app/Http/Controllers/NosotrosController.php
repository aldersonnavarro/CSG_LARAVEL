<?php

namespace App\Http\Controllers;

class NosotrosController extends Controller
{
    public function index()
    {
        return view('page.nosotros'); // Simplemente muestra la vista sin procesar datos
    }
}
