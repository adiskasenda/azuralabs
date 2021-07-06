@extends('layouts/main')
@section('title', 'Beranda')
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
        
            <form role="form" method="post" action="/pengurus-harian" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama Diklat</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Penyelenggara</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Biaya</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Kadaluarsa Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sertifikat</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Diklat</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Waktu Mulai</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Durasi</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control @error('nama') is-invalid @enderror" id="inputPassword" placeholder="Masukkan nama" name="nama" value="{{ old('nama') }}">
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
