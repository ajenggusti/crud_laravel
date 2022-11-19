@extends('layout/main')
@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">

            <h1>Data Mahasiswa</h1>
            <table class="table-bordered mt-3">
                <tr>
                    <th>NO</th>
                    <th>NRP</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>ALAMAT</th>
                    <th>ACTION</th>
                </tr>
                @foreach ($data as $dataMahasiswa)
                <tr>
                    <td>{{ $dataMahasiswa-> id}}</td>
                    <td>{{ $dataMahasiswa-> nrp}}</td>
                    <td>{{ $dataMahasiswa-> nama}}</td>
                    <td>{{ $dataMahasiswa-> email}}</td>
                    <td>{{ $dataMahasiswa-> alamat}}</td>
                    <td>
                        <a href="{{ '/show/' . $dataMahasiswa->id }}" class="btn btn-warning">Edit Data</a>
                        <a href="{{ '/destroy/' . $dataMahasiswa->id }}"class="btn btn-danger">Hapus Data</a>
                    </td>
                </tr> 
                @endforeach
            </table>

        </div>
    </div>
</div>
@endsection