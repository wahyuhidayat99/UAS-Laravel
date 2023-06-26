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
        Schema::create('sepatupemain', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemain');
            $table->unsignedBigInteger('id_sepatu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sepatupemain');
    }
};
