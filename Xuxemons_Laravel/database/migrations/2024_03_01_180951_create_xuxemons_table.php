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
        Schema::create('xuxemons', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->integer('vida')->nullable()->default(0);
            $table->unsignedBigInteger('tipo_id')->nullable();
            $table->string('archivo')->nullable();
            $table->text('descripcion')->nullable()->default('');
            $table->timestamps();

            // Define la relación con la tabla 'tipos'
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('xuxemons', function (Blueprint $table) {
            // Elimina la restricción de clave externa antes de eliminar la tabla
            $table->dropForeign(['tipo_id']);
        });

        Schema::dropIfExists('xuxemons');
    }
};
