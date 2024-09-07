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
        Schema::create('clusters', function (Blueprint $table) {
            $table->id('idCluster');
            $table->string('nom');
            $table->unsignedBigInteger('idFilière');
            $table->foreign('idFilière')->references('idFilière')->on('filieres')->onDelete('cascade');
            $table->unsignedBigInteger('idVillage');
            $table->foreign('idVillage')->references('idVillage')->on('villages')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clusters');
    }
};
