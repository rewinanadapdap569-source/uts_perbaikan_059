@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h5 class="mb-0">Daftar Pasien</h5>
            <a href="{{ route('pasien.create') }}" class="btn btn-light btn-sm">Tambah Pasien</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No RM</th>
                        <th>Nama Pasien</th>
                        <th>Jenis Kelamin</th>
                        <th>Umur</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pasiens as $p)
                    <tr>
                        <td>{{ $p->no_rm }}</td>
                        <td>{{ $p->nama_pasien }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td>{{ $p->umur }}</td>
                        <td>
                            <a href="{{ route('pasien.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pasien.destroy', $p->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection