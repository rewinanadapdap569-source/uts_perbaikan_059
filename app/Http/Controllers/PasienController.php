<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function index() {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create() {
        return view('pasien.create');
    }

    public function store(Request $request) {
        $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|numeric',
        ]);
        Pasien::create($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit($id) {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'no_rm' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required|numeric',
        ]);
        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Diperbarui!');
    }

    public function destroy($id) {
        Pasien::findOrFail($id)->delete();
        return redirect()->route('pasien.index')->with('success', 'Data Berhasil Dihapus!');
    }
}