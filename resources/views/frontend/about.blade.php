@extends('frontend.inc.main')
@section('title') <title>Augustine Prevost Hotel | TENTANG KAMI</title> @endsection

@section('content')

<div class="container mt-5 mb-5">
 <div class="row d-flex justify-content-center">
  {{-- Animasi Fade Up untuk setiap kotak info --}}
  <div class="col-lg-3 col-md-6 mb-4 px-4" data-aos="fade-up" data-aos-delay="100">
   <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
    <img src="/nyoba/images/about/hotel.svg" width="70px" alt="Rooms Icon">
    <h4 class="mt-3">{{$r }}+ ROOMS</h4>
   </div>
  </div>

  <div class="col-lg-3 col-md-6 mb-4 px-4" data-aos="fade-up" data-aos-delay="200">
   <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
    <img src="/nyoba/images/about/customers.svg" width="70px" alt="Customers Icon">
    <h4 class="mt-3">{{$c}}+ CUSTOMERS</h4>
   </div>
  </div>
  <div class="col-lg-3 col-md-6 mb-4 px-4" data-aos="fade-up" data-aos-delay="300">
   <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
    <img src="/nyoba/images/about/t.png" width="70px" alt="Transactions Icon">
    <h4 class="mt-3">{{ $t }}+ TRANSACTIONS</h4>
   </div>
  </div>

 </div>
</div>


<div class="container mt-5 mb-5">
 <div class="row justify-content-between align-items-center">
  {{-- Animasi Slide Right untuk bagian teks --}}
  <div class="col-lg-6 col-md-5 mb-4 justify order-lg-1 order-md-1 order-2 text-center text-md-start mt-4 mt-lg-0 mt-md-0" data-aos="fade-right">
   <h3 class="mb-3 ">Tentang Kami</h3>
   <p>
    Perusahaan Augustine Prevost Hotel telah berdiri sejak tahun 2022, Dimulai dari satu bangunan hotel yang tidak terlalu besar dan hanya menyewakan beberapa kamar.
    Namun kini Perusahaan Augustine Prevost Hotel telah mempunyai Kamar lebih dari 20 Kamar. Fasilitas yang ada di Perusahaan Augustine Prevost Hotel diantara lain adalah Kolam renang pribadi, Ruangan Merokok, Gratis Wifi, Sarapan, dan Makan Siang.
   </p>
  </div>
  {{-- Animasi Slide Left untuk bagian gambar --}}
  <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1" data-aos="fade-left">
   <img src="/nyoba/images/carousel/1.png" class="w-100 d-block mb-3 rounded shadow-sm" alt="Hotel Image 1">
   <img src="/nyoba/images/carousel/2.png" class="w-100 d-block mb-3 rounded shadow-sm" alt="Hotel Image 2">
   <img src="/nyoba/images/carousel/3.png" class="w-100 d-block rounded shadow-sm" alt="Hotel Image 3">
  </div>
 </div>
</div>


@endsection