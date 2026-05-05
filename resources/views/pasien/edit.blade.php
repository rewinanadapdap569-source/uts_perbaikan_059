@extends('layout.master') 

@section('title', 'Edit Pasien') 

@section('content') 
<div class="row mt-4"> 
    <div class="col-md-8 mx-auto"> 
        <div class="card shadow-sm border-warning"> 
            <div class="card-header bg-warning text-dark"> 
                <h4 class="mb-0">Edit Data: {{ $pasien->nama_pasien }}</h4> 
            </div> 
            <div class="card-body"> 
                <!-- Perbaikan: Action diubah dari /produk ke /pasien --> 
                <form action="/pasien/{{ $pasien->id }}" method="POST"> 
                    @csrf 
                    @method('PUT') <!-- Method spoofing untuk update data --> 
                    
                    <div class="mb-3"> 
                        <label class="form-label fw-bold">No Rekam Medis</label> 
                        <input type="text" name="no_rekam_medis" value="{{ $pasien->no_rekam_medis }}" class="form-control" required> 
                    </div>

                    <div class="mb-3"> 
                        <label class="form-label fw-bold">Nama Pasien</label> 
                        <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}" class="form-control" required> 
                    </div> 
                    
                    <div class="mb-3"> 
                        <label class="form-label fw-bold">Jenis Kelamin</label> 
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki" {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div> 
                    
                    <div class="mb-3"> 
                        <label class="form-label fw-bold">Umur</label> 
                        <div class="input-group">
                            <input type="number" name="umur" value="{{ $pasien->umur }}" class="form-control" required>
                            <span class="input-group-text">Tahun</span>
                        </div>
                    </div> 
                    
                    <hr>
                    <div class="d-flex justify-content-between">
                        <a href="/pasien" class="btn btn-secondary">Kembali</a> 
                        <button type="submit" class="btn btn-warning text-dark fw-bold shadow-sm">Simpan Perubahan</button> 
                    </div>
                </form> 
            </div> 
        </div> 
    </div> 
</div> 
@endsection