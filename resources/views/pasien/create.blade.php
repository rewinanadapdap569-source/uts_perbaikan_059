@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">Form Pasien</div>
        <div class="card-body">

            {{-- Pesan Error kalau ada yang belum diisi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>@foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach</ul>
                </div>
            @endif

            <form action="{{ route('pasien.store') }}" method="POST">
                @csrf 
                <div class="mb-3">
                    <label>No Rekam Medis</label>
                    <input type="text" name="no_rm" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Nama Pasien</label>
                    <input type="text" name="nama_pasien" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Umur</label>
                    <input type="number" name="umur" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan Data Pasien</button>
            </form>
        </div>
    </div>
</div>
@endsection