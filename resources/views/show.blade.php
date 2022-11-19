@extends('layout/main')
@section('container')
<div class="container p-5">
    <h1>Edit Data Mahasiswa</h1>
    <form action="{{ url('/update/'.$data->id) }}" method="POST">
        @csrf
        Nama Mahasiswa :<br>
        <input type="text" name="nama" value="{{ $data->nama }}"><br>
        Alamat Email : <br>
        <input type="text" name="email" value="{{ $data->email }}"><br>
        NRP : <br>
        <input type="text" name="nrp" value="{{ $data->nrp }}"><br>
        Alamat Rumah : <br>
        <input type="text" name="alamat" value="{{ $data->alamat }}"><br>
        <button type="submit" class="btn btn-primary position-absolute start-30">Edit Data</button>
    </form>
</div>
@endsection