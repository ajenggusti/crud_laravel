@extends('layout/main')
@section('container')
<div class="container p-5">
    <br>
    <h1>Input Data Mahasiswa</h1>
    <br>
    <form action="{{ url('/store') }}" method="POST">
        @csrf
        Nama Mahasiswa :<br>
        <input type="text" name="nama"><br>
        Alamat Email : <br>
        <input type="text" name="email"><br>
        NRP :<br>
        <input type="text" name="nrp"><br>
        Alamat Rumah :<br>
        <input type="text" name="alamat"><br><br>
        <button type="submit" class="btn btn-primary position-absolute start-30">Submit Data</button>

    </form>
</div>
@endsection