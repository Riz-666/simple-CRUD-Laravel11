@include('/template/navbar')
@extends('layout')

@section('konten')
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://s1.paultan.org/image/2019/03/Lamborghini-Aventador-SVJ-Roadster-5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://paultan.org/image/2023/06/Ferrari-SF90-XX-Stradale-and-SF90-XX-Spider-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://paultan.org/image/2021/08/Toyota-GR-Supra-35th-Anniversary-Edition-2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<br>
<div class="d-grid gap-2 col-6 mx-auto">
<a href="/mobil" class="btn btn-light btn-lg"><i class="fa-solid fa-car"></i><b> Lihat Mobil Lainnya</b></a>
</div>
@endsection