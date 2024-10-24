@include('/template/navbar')

@extends('layout')

@section('konten')
<form action="{{ Route('submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="text-center">Input Data Mobil</h1>
<div class="card">

    <div class="card-body">
      <input type="hidden" name="id">
      <label for="">Merk Mobil</label>
      <input class="form-control" type="text" name="merk_mobil">

      <label for="">type Mobil</label>
      <input class="form-control" type="text" name="type_mobil">
      
      <label for="">warna Mobil</label>
      <input class="form-control" type="text" name="warna">

      <label for="">Stok Mobil</label>
      <input class="form-control" type="number" name="stok">

      <label for="">Harga Mobil</label>
      <input class="form-control" type="text" name="harga">

      <label for="">upload gambar</label>
      <input class="form-control" type="file" name="image">
        <br>
        <a href="/mobil" class="btn btn-danger btn-lg"><i class="fa-solid fa-angles-left"></i> Kembali</a>
      <button class="btn btn-primary btn-lg" type="submit"><i class="fa-solid fa-paper-plane"></i> kirim</button>
    </div>
  </div>
</form>
@endsection