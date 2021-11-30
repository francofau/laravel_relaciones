<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materia', function (Blueprint $table) {
            $table->id();
            //FK1:
            $table->foreignId('alumno_id')
                  ->nullable()
                  ->constrained('alumnos')//acá indicamos siempre la tabla destino/relacion
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            //FK2:
            $table->foreignId('materia_id')
                ->nullable()
                ->constrained('materias')//acá indicamos siempre la tabla destino/relacion
                ->cascadeOnUpdate()
                ->nullOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_materia');
    }
}
