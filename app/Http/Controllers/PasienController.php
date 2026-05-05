<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien; // Pastikan Model dipanggil

class PasienController extends Controller
{
    // --- TAMBAHKAN FUNGSI INI ---
    public function create()
    {
        return view('pasien.create'); // Nama file view kamu: resources/views/pasien/create.blade.php
    }

    // --- FUNGSI STORE KAMU YANG TADI ---
    public function store(Request $request)
    {
        $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|numeric',
        ]);

        Pasien::create([
            'no_rm' => $request->no_rm,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
        ]);

        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Disimpan!');
    }
}