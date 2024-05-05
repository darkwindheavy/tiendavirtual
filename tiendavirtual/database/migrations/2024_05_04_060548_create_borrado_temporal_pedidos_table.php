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
        Schema::create('borrado_temporal_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_id')->constrained('pedidos');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->timestamp('fecha');
            $table->decimal('total', 8, 2);
            $table->string('estado');
            $table->string('direccion_envio');
            $table->timestamp('fecha_borrado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrado_temporal_pedidos');
    }
};
