<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToEjerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ejercicios', function (Blueprint $table) {
            $table->unsignedBigInteger('set_id')->after('id');
            $table->unsignedBigInteger('rep_id')->after('set_id');
            $table->unsignedBigInteger('marca_id')->after('rep_id');
            $table->unsignedBigInteger('marcaCliente_id')->after('marca_id');

            $table->foreign('set_id')->references('id')->on('sets');
            $table->foreign('rep_id')->references('id')->on('reps');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('marcaCliente_id')->references('id')->on('marca_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ejercicios', function (Blueprint $table) {
            //
        });
    }
}
