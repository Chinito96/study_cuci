<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();
            $table->text('contacto','150');
            $table->text('servicio','200');
            $table->text('descripcion','200');
            $table->text('domicilio','200');
            $table->integer('precio');
            $table->text('telefono','15');
            $table->text('tipo_habitacion','50');
            $table->text('genero','10');
            $table->text('imagen','200');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
