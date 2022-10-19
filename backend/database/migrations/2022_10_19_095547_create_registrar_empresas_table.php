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
            $table->string('tipoNegocioE');
            $table->string('descripcion');
            $table->string('horariosAtencion');
            $table->string('diasAtencion');
            $table->integer('numeroCelular');
            $table->integer('numeroTelefono');
            $table->string('direccion');
            $table->string('correoEmpresa');
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
