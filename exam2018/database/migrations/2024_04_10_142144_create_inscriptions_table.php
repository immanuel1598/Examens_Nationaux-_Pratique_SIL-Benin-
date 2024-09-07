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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('Idadh');
            $table->integer('année');
            $table->date('dateinscription');
            $table->string('domaine');
            $table->primary(['Idadh','année']);
            $table->foreign('Idadh')->references('Idadh')->on('adherents')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
