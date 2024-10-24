@include('/template/navbar')

@extends('layout')

@section('konten')
@include('sweetalert::alert')
    <h1 class="text-center">List Mobil</h1>
    
    
    <a class="btn btn-primary btn-sm" href="{{ route('tambah') }}"><i class="fa-solid fa-plus"></i> Tambah Mobil</a>
    <center>
        <div class="table-responsive">
    <table class="table table-hover bg-light" border="1px" style="margin: 10px;" width="500px ">
        <thead class="">
            <tr style="text-align: center">
                <th>ID</th>
                <th>Merk Mobil</th>
                <th>Type Mobil</th>
                <th>Warna</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Image</th>
                <th colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
               @foreach ($mobil as $no=>$m)
               <tr style="text-align: center">
                <td>{{ $no+1 }}</td>
                <td>{{ $m->merk_mobil }}</td>
                <td>{{ $m->type_mobil }}</td>
                <td>{{ $m->warna }}</td>
                <td>{{ $m->stok }}</td>
                <td>{{ $m->harga }}</td>
                <td><img src="{{ asset('storage/images/'.$m->image) }}" alt="" width="50px" height="50px"></td>
                <td><a class="btn btn-warning btn-sm" href="{{ Route('edit',$m->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td>
                    <form action="{{ Route('hapus', $m->id) }}" method="POST">
                        @csrf
                    <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                </td>
                <td><a class="btn btn-info  btn-sm" href="{{ Route('view',$m->id) }}"><i class="fa-solid fa-eye"></i></a></td>
            </tr>
               @endforeach
        </tbody>

    </table>
</div>
</center>
<br>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/" class="btn btn-light btn-lg"><i class="fa-solid fa-house"></i> Back To Home</a>
    </div>
@endsection