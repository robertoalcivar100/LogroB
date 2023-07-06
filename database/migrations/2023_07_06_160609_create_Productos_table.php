<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->double('precio');
            $table->integer('cantidad');
            $table->date('fecha_ingreso');
            $table->boolean('estado');
            $table->unsignedBigInteger('id_Tipos_Productos');
            $table->foreign('id_Tipos_Productos')->references('id')->on('Tipos_Productos');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Productos');
    }
};
