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
        Schema::create('buku_tamu', function (Blueprint $table) {
            $table->string('id_tamu', 5)->primary();
            $table->date('tanggal');
            $table->string('nama_tamu', 255);
            $table->text('alamat');
            $table->string('no_hp', 13);
            $table->string('bertemu', 255);
            $table->string('kepentingan', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_tamu');
    }
};
