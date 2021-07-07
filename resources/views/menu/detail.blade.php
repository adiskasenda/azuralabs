@extends('layouts/main')
@section('title', 'Detail Diklat')
@section('content')
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
    <input type="hidden">
</div>
</div>

<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10">
        <!-- general form elements -->  
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Detail Diklat</h3>
            </div>
        
            <form role="form">
            <div class="card-body">
                <div class="mb-2 row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Diklat</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->nama }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->jenis }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->deskripsi }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="penyelenggara" class="col-sm-3 col-form-label">Penyelenggara</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->penyelenggara }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="biaya" class="col-sm-3 col-form-label">Biaya</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->biaya }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="jumlahPeserta" class="col-sm-3 col-form-label">Jumlah Peserta</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->jumlahPeserta }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalKadaluarsa" class="col-sm-3 col-form-label">Tanggal Kadaluarsa Sertifikat</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->kadaluarsaSertifikat }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="sertifikat" class="col-sm-3 col-form-label">Sertifikat</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->sertifikat }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalDiklat" class="col-sm-3 col-form-label">Tanggal Diklat</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->tanggalMulai }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="tanggalSelesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->tanggalSelesai }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="waktuMulai" class="col-sm-3 col-form-label">Waktu Mulai</label>
                        <div class="col-sm-4">
                            <input class="form-control" value="{{ $diklat->waktuMulai }}">
                        </div>
                    <label for="waktuSelesai" class="col-sm-1 col-form-label">Sampai</label>
                        <div class="col-sm-4">
                            <input class="form-control" value="{{ $diklat->waktuSelesai }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="durasi" class="col-sm-3 col-form-label">Durasi</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->durasi }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="lokasi" class="col-sm-3 col-form-label">Lokasi</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->tempat }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="createdBy" class="col-sm-3 col-form-label">CreatedBy</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->createdBy }}">
                        </div>
                </div>
                <div class="mb-2 row">
                    <label for="updatedBy" class="col-sm-3 col-form-label">UpdatedBy</label>
                        <div class="col-sm-9">
                            <input class="form-control" value="{{ $diklat->updatedBy }}">
                        </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <a href="/" class="btn btn-primary">Kembali</a>
            </div>
            </form>
        </div>  
    </div>
</div>
@endsection
