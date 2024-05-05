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
        Schema::create('borrado_temporal_usuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('nombre');
            $table->string('email');
            $table->string('password');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->foreignId('rol_id')->constrained('roles');
            $table->timestamp('fecha_borrado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrado_temporal_usuarios');
    }
};
