<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    // Tambahkan baris fillable ini agar Laravel mengizinkan data disimpan
   protected $fillable = ['no_rm', 'nama_pasien', 'jenis_kelamin', 'umur'];
}