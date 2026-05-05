@extends('layouts.master')

@section('title', 'Tambah Pasien Baru')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="mb-0 fw-bold">Form Registrasi Pasien</h5>
                </div>
                <div class="card-body p-4">
                    
                    {{-- Pastikan Route 'pasien.store' sudah ada di web.php --}}
                    <form action="{{ route('pasien.store') }}" method="POST">
                        @csrf 

                        <!-- 1. NO REKAM MEDIS -->
                        <div class="mb-3">
                            <label for="no_rm" class="form-label fw-bold">No Rekam Medis</label>
                            <input type="text" name="no_rm" 
                                   class="form-control @error('no_rm') is-invalid @enderror" 
                                   id="no_rm" value="{{ old('no_rm') }}" 
                                   placeholder="Masukkan nomor rekam medis" required>
                            @error('no_rm')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- 2. NAMA PASIEN -->
                        <div class="mb-3">
                            <label for="nama_pasien" class="form-label fw-bold">Nama Pasien</label>
                            <input type="text" name="nama_pasien" 
                                   class="form-control @error('nama_pasien') is-invalid @enderror" 
                                   id="nama_pasien" value="{{ old('nama_pasien') }}" 
                                   placeholder="Masukkan nama lengkap" required>
                            @error('nama_pasien')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- 3. JENIS KELAMIN -->
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" 
                                    class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- 4. UMUR -->
                        <div class="mb-3">
                            <label for="umur" class="form-label fw-bold">Umur</label>
                            <div class="input-group">
                                <input type="number" name="umur" 
                                       class="form-control @error('umur') is-invalid @enderror" 
                                       id="umur" value="{{ old('umur') }}" 
                                       placeholder="Contoh: 25" required>
                                <span class="input-group-text">Tahun</span>
                            </div>
                            @error('umur')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- TOMBOL AKSI -->
                        <div class="d-flex justify-content-between pt-3">
                            <a href="{{ route('pasien.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left"></i> Batal
                            </a>
                            <button type="submit" class="btn btn-primary px-5 shadow-sm">
                                <i class="bi bi-save me-1"></i> Simpan Data Pasien
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection