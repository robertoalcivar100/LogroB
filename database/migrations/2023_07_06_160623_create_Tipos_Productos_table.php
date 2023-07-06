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
        Schema::create('Tipos_Productos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->boolean('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Tipos_Productos');
    }
};