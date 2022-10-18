<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEmpresa');
            $table->string('tipoNegocio');
            $table->string('Descripcion');
            $table->string('dias');
            $table->integer('numeroCelular');
            $table->integer('numeroTelefono')->nullable();
            $table->string('correoEmpresa');
            $table->string('direccion');
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
        Schema::dropIfExists('registrar_empresas');
    }
};
