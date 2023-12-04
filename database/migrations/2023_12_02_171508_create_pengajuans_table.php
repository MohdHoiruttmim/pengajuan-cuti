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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('semester');
            $table->string('tahun');
            $table->string('ktm');
            $table->string('free_fak');
            $table->string('free_per');
            $table->string('free_ortu');
            $table->string('ttd');
            $table->string('ttd_prodi')->nullable();
            $table->string('status');
            $table->string('keterangan_ditolak')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->foreignId('id_mahasiswa')->constrained('mahasiswas', 'id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
