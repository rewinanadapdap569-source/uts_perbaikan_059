<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Fungsi ini akan dijalankan saat kamu mengetik 'php artisan migrate'
     */
 public function up(): void
{
    Schema::create('pasiens', function (Blueprint $table) {
        $table->id();
        $table->string('no_rm');          // Harus ada ini
        $table->string('nama_pasien');    // Ganti 'nama' jadi 'nama_pasien'
        $table->string('jenis_kelamin');   // Tambahkan ini
        $table->integer('umur');          // Tambahkan ini
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
