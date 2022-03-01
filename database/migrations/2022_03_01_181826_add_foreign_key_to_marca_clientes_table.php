<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToMarcaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marca_clientes', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('ejercicio_id')->after('id');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marca_clientes', function (Blueprint $table) {
            //
        });
    }
}
