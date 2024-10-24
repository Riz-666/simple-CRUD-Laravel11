@include('template.navbar')

@extends('layout')

@section('konten')
<br>
<div class="container">
    <div class="card mb-3">
        <div class="card-header text-center ">
            <b><h3><b>{{ $mobil->merk_mobil }}</b></h3></b>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="left col"><img src="{{ asset('storage/images/'.$mobil->image) }}" width="500px" height="250px"></div>

                    <div class=" middle col">Type Mobil <br><input class="form-control" type="text" value="{{ $mobil->type_mobil }}" disabled>

                    Warna Mobil <br><input class="form-control" type="text" value="{{ $mobil->warna }}" disabled>

                    Stok Mobil <br><input class="form-control" type="text" value="{{ $mobil->stok }}" disabled>

                    Harga Mobil <br><input class="form-control" type="text" value="{{ $mobil->harga }}" disabled>
                    </div>
                </div>
        </div>
        <div class="card-footer text-center"><a class="btn btn-outline-dark btn-sm form-control" href="/mobil"><i class="fa-solid fa-angles-left"></i> Kembali</a></div>
    </div>
</div>

@endsection