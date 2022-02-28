<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('set_id');
            $table->unsignedBigInteger('rep_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('marcaCliente_id');
            $table->string('Nombre_Ejercicio');           
            $table->string('Observaciones');
            $table->timestamps();

            $table->foreign('set_id')-references('id')->on('sets');
            $table->foreign('rep_id')-references('id')->on('reps');
            $table->foreign('marca_id')-references('id')->on('marca');
            $table->foreign('marcaCliente_id')-references('id')->on('marca_clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ejercicios');
    }
}
