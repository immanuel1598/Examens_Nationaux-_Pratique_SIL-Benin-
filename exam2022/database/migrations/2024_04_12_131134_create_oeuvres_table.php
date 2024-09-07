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
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id('idOeuvre');
            $table->string('nom');
            $table->string('description');
            $table->integer('année');
            $table->unsignedBigInteger('idArtiste');
            $table->foreign('idArtiste')->references('idArtiste')->on('artistes')->onDelete('cascade');
            $table->unsignedBigInteger('idCategorie');
            $table->foreign('idCategorie')->references('idCategorie')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
