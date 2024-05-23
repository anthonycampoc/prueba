<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_1')->nullable();
            $table->string('nombre_2')->nullable();
            $table->string('apellido_1')->nullable();
            $table->string('apellido_2')->nullable();
            $table->string('cedula')->nullable();
            $table->string('email')->unique()->nullable();
            $table->enum('status',['ACTIVE','DEACTIVATE'])->default('ACTIVE')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fecha_nacimiento')->nullable();
            $table->string("imagen")->nullable();
            $table->string("link")->nullable();
            $table->unsignedBigInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias')->nullable();
            $table->unsignedBigInteger('canton_id')->nullable();
            $table->foreign('canton_id')->references('id')->on('cantons')->nullable();
            $table->unsignedBigInteger('empresa_id')->nullable();
            $table->foreign('empresa_id')->references('id')->on('empresas')->nullable();

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
        Schema::dropIfExists('asesors');
    }
}
