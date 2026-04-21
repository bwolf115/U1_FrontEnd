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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre',48)->nullable(false);
            $table->string('identidad',20)->nullable(false);
            $table->string('telefono',10)->nullable(false);
            $table->date('fecha_inicial')->nullable(false);
            $table->date('fecha_final')->nullable(false);
            $table->string('servicios',255)->nullable();
            $table->decimal('costo', 8, 2)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservaciones');
    }
};
