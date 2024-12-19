<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id(); // Clau primària
            $table->string('titol'); // Camp per al títol
            $table->text('descripcio'); // Camp per a la descripció
            $table->integer('any'); // Any de la pel·lícula
            $table->string('director'); // Director de la pel·lícula
            $table->timestamps(); // Camps created_at i updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('peliculas'); // Eliminar la taula
    }
};
