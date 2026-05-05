<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Model;

 class Produk extends Model
 {
 // Memberi tahu Laravel bahwa Model ini untuk tabel'produks'
 protected $table = 'pasiens';

 // Mass Assignment: Mendaftarkan kolom-kolom yang
//DIIZINKAN untuk diisi dari form
 protected $fillable = ['nama_pasien', 'no_rekam_medis',
'jenis_kelamin', 'umur'];
 }
