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
        Schema::create('series', function (Blueprint $table) {
            $table->id(); // Clau primària
            $table->string('titol'); // Nom de la sèrie
            $table->text('descripcio'); // Descripció de la sèrie
            $table->integer('temporades'); // Nombre de temporades
            $table->integer('any_inici'); // Any d'inici de la sèrie
            $table->string('creador'); // Creador/a de la sèrie
            $table->timestamps(); // Camps created_at i updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('series'); // Elimina la taula
    }
};

