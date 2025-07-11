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
        Schema::create('pkls', function (Blueprint $table) {
            $table->id();
            $table->string('file',255);
            $table->string('tp',6);
            $table->date('tgl_pemberangkatan');
            $table->date('tgl_monitoring1')->nullable();
            $table->date('tgl_monitoring2')->nullable();
            $table->date('tgl_monitoring3')->nullable();
            $table->date('tgl_penjemputan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pkls');
    }
};
