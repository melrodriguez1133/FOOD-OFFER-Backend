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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreProducto');
            $table->string('descripcion');
            $table->integer('precio');
            $table->string('fechaElaboracion');
            $table->string('fechaVencimiento');
            $table->string('fechaOferta');
            $table->integer('stock');
            $table->string('imagen');

            $table->foreignId('id_categoria')
                  ->constrained('categorias')
                  ->cascadeOnUpdate()
                  ->cascadeOnDelete();
            
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
        Schema::dropIfExists('productos');
    }
};
