@extends('layouts.master')

@section('title', 'Daftar Pasien')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Data Pasien</h2>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="px-4">No_rekam_medis</th>
                        <th>nama pasien</th>
                        <th>jenis kelamin</th>
                         <th>umur</th>
                        <th class="text-center">tekan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pasien as $p)
                    <tr>
                        <td class="px-4">{{ $p->nama }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ \Carbon\Carbon::parse($p->tgl_lahir)->format('d-m-Y') }}</td>
                        <td class="text-center">
                            <form action="{{ route('pasien.destroy', $p->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">Data pasien masih kosong.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection