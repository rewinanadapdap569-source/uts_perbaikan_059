@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">Edit Data Pasien</div>
        <div class="card-body">
            <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-3">
                    <label>No RM</label>
                    <input type="text" name="no_rm" value="{{ $pasien->no_rm }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Umur</label>
                    <input type="number" name="umur" value="{{ $pasien->umur }}" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Update Data</button>
                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection