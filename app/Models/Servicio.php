<?php
// app/Models/Servicio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;

    // Define los campos que se pueden llenar de forma masiva
    protected $fillable = ['nombre', 'descripcion', 'precio'];
}
