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
            $table->string('diasA');
            $table->string('horaA');
            $table->string('horaC');
            $table->integer('numerosContactos');
            $table->string('correoEmpresa');
            $table->string('direccionesSucursales');    
            $table->integer('tipoNegocio_id')->unsigned();
            $table->foreign('tipoNegocio_id')->references('id')->on('tipoNegocios');
            //$table->foreignId('id_tipoNegocio')
            //      ->nullable()
            //      ->constrained('tipoNegocios')
            //      ->nullOnDelete();
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
