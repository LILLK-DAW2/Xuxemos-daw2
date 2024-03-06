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
        Schema::create('inventarioXuxemons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('xuxemon_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('vida')->nullable()->default(0);
            $table->integer('xuxes')->nullable()->default(0);
            $table->string('tamaño')->nullable()->default("pequeño");



            $table->timestamps();

            // Define las relaciones con las tablas 'xuxemons' y 'users'
            $table->foreign('xuxemon_id')->references('id')->on('xuxemons')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarioXuxemons');
    }
};
