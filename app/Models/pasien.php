<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan (opsional jika nama tabel kamu 'pasiens')
     */
    protected $table = 'pasiens';

    /**
     * fillable digunakan untuk mendaftarkan kolom mana saja yang boleh diisi.
     * Sesuaikan dengan kolom yang ada di database kamu.
     */
    protected $fillable = [
        'nama', 
        'tgl_lahir', 
        'alamat'
    ];
}