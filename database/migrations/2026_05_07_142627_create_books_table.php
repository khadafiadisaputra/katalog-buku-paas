<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel 'books'.
     * Langkah ini merupakan bagian dari implementasi database sebagai 
     * layanan add-on dalam ekosistem PaaS[cite: 275, 295].
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul');         // Kolom Judul Buku
            $table->string('penulis');       // Kolom Nama Penulis
            $table->year('tahun_terbit');    // Kolom Tahun Terbit (format YYYY)
            $table->timestamps();            // Otomatis membuat created_at & updated_at
        });
    }

    /**
     * Batalkan migrasi (menghapus tabel).
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};