@extends('layouts/main')
@section('title', 'Beranda')
@section('content')
<div class="row"></div>
<div class="row">
<div class="col-md-1"></div>
    <div class="col-md-10">
        <table class="table table-striped" id="myTable" class="display">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                    <td>Row 1 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
