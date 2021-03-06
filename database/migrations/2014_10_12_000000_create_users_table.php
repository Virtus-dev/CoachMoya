<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->enum('sex',['Hombre','Mujer']);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->decimal('RM_Historico_Squat')->nullable();
            $table->decimal('RM_Historico_Bench')->nullable();
            $table->decimal('RM_Historico_DeadLift')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->boolean('verified')->default(false);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
