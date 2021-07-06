@extends('layouts/main')
@section('title', 'Tambah Diklat')
@section('content')
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
    
</div>
</div>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- general form elements -->  
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Input Diklat</h3>
            </div>
        
            <form role="form" method="post" action="/tambah" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="mb-2 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Nama Diklat" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Jenis Diklat" name="jenis" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Deskripsi" name="deskripsi" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="penyelenggara" class="col-sm-3 col-form-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Penyelenggara" name="penyelenggara" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Biaya" name="biaya" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="jumlahPeserta" class="col-sm-3 col-form-label">Jumlah Peserta</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Jumlah Peserta" name="jumlahPeserta" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalKadaluarsa" class="col-sm-3 col-form-label">Tanggal Kadaluarsa Sertifikat</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Tanggal Kadaluarsa Sertifikat" name="tanggalKadaluarsa" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="sertifikat" class="col-sm-3 col-form-label">Sertifikat</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Sertifikat" name="sertifikat" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalDiklat" class="col-sm-3 col-form-label">Tanggal Diklat</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Tanggal Diklat" name="tanggalMulai" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalSelesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Tanggal Selesai" name="tanggalSelesai" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="waktuMulai" class="col-sm-3 col-form-label">Waktu Mulai</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Waktu Mulai" name="waktuMulai" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    <label for="waktuSelesai" class="col-sm-1 col-form-label">Sampai</label>
                        <div class="col-sm-4">
                            <input type="time" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Waktu Selesai" name="waktuSelesai" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="durasi" class="col-sm-3 col-form-label">Durasi</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Durasi" name="durasi" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan Lokasi" name="lokasi" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="createdBy" class="col-sm-3 col-form-label">CreatedBy</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('nama') is-invalid @enderror" id="createdBy" placeholder="Masukkan Pembuat" name="createdBy" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="updatedBy" class="col-sm-3 col-form-label">UpdatedBy</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control @error('nama') is-invalid @enderror" id="updatedBy" placeholder="Masukkan Pengedit" name="updatedBy" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary tambahph">Submit</button>
            </div>
            </form>
        </div>  
    </div>
</div>
@endsection
