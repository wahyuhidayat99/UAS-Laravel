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
        Schema::create('pemains', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('no_punggung');
            $table->unsignedBigInteger('id_club');
            $table->unsignedBigInteger('id_negara');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemains');
    }
};
