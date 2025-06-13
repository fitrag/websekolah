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
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
             $table->string('nama_aplikasi', 100);
            $table->string('nama_sekolah', 100);
            $table->text('kata_pengantar');
            $table->text('sejarah');
            $table->text('akreditasi');
            $table->text('visi');
            $table->text('misi');
            $table->string('npsn', 100);
            $table->string('alamat_sekolah', 100);
            $table->string('nm_kepsek', 100);
            $table->string('nip_kepsek', 100);
            $table->text('logo');
            $table->text('kop')->nullable();
            $table->text('header_content')->nullable();
            $table->text('embeded')->nullable();
            $table->text('tumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};
