@extends('layouts/main')
@section('title', 'Beranda')
@section('content')
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
    <a href="/tambah" class="btn btn-primary my-3">Tambah</a>
</div>
</div>
<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10">
        <table class="table table-striped" id="myTable" class="display">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Diklat</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Penyelenggara</th>
                    <th scope="col">Jumlah Peserta</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Berakhir</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($diklat as $no => $item)                    
                    <tr>
                        <th scope="row">{{ $no+1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->penyelenggara }}</td>
                        <td>{{ $item->jumlahPeserta }}</td>
                        <td>{{ $item->tanggalMulai }}</td>
                        <td>{{ $item->tanggalSelesai }}</td>
                        <td>{{ $item->durasi }}</td>
                        <td>{{ $item->tempat }}</td>
                        <td>
                            <a href="/detail/{{ $item->id }}" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i> Detail</a>
                            <a href="/detail/{{ $item->id }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                            <a href="#" class="btn btn-danger btn-sm hapus" id="{{ $item->id }}"><i class="fa fa-trash-o"></i> Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
