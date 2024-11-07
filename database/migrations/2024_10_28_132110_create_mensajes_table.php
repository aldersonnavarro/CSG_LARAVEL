<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id(); // Crea una columna 'id' auto-incremental
            $table->string('nombre'); // Crea una columna 'nombre' de tipo string
            $table->string('email'); // Crea una columna 'email' de tipo string
            $table->string('telefono'); // Crea una columna 'telefono' de tipo string
            $table->text('mensaje'); // Crea una columna 'mensaje' de tipo text
            $table->string('servicio'); // Crea una columna 'servicio' de tipo string
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensajes'); // Elimina la tabla 'mensajes' si existe
    }
}