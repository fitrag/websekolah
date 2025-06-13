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
        Schema::create('peraturan_akademiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama',255);
            $table->text('deskripsi',255);
            $table->integer('point');
            $table->string('ket',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan_akademiks');
    }
};
