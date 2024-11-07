<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        return view('page.inicio'); // Asegúrate de que la vista sea "inicio.blade.php" en resources/views/page
    }
}
