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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->timestamps()->nullable();
            $table->string('nama', 100);
            $table->string('nim', 20);
            $table->string('alamat', 100)->nullable();
            $table->foreignId('id_prodi')->constrained('prodis', 'id')->cascadeOnDelete();
            $table->foreignId('id_fakultas')->constrained('fakultas', 'id')->cascadeOnDelete();
            $table->foreignId('id_user')->constrained('users', 'id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
