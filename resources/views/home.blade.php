@extends('layouts.app')

@section('content')
<div class="jumbotron-fluid p-5 bg-info text-light" style="margin-top:-25px;">
  <div class="container py-5">
    <h1 class="display-5">E-Bursa Kerja Khusus</h1>  
    <h1 class="lead">Portal peluang/lowongan kerja untuk para lulusan SMK</h1>  
    <div class="mt-3">  
      <a href="#" class="btn btn-primary mr-3">Cari Lowongan</a>
      <a href="#" class="btn btn-primary mr-3">Cari Job Fair</a>
    </div>
  </div>
</div>
<div class="container-fluid .bg-grey">
  {{-- User Count --}}
  <div class="row px-5 py-5 bg-light">
    <div class="col-3 text-center">
      <img src="image/stealth.png" class="bg-info w-50"></img>
      <div class="user_total">
        <div class="h4 font-weight-bold">100</div>
        <p class="h6 font-weight-bold">Total Lulusan</p>
        <p class="h7 text-dark">Jumlah lulusan terdaftar</p>
      </div>
    </div>
    <div class="col-3 text-center">
      <img src="image/stealth.png" class="bg-info w-50"></img>
      <div class="user_total">
        <div class="h4 font-weight-bold">100</div>
        <p class="h6 font-weight-bold">Total Sekolah</p>
        <p class="h7 text-dark">Jumlah sekolah terdaftar</p>
      </div>
    </div>
    <div class="col-3 text-center">
      <img src="image/stealth.png" class="bg-info w-50"></img>
      <div class="user_total">
        <div class="h4 font-weight-bold">100</div>
        <p class="h6 font-weight-bold">Total Lowongan</p>
        <p class="h7 text-dark">Jumlah lowongan terdaftar</p>
      </div>
    </div>
    <div class="col-3 text-center">
      <img src="image/stealth.png" class="bg-info w-50"></img>
      <div class="user_total">
        <div class="h4 font-weight-bold">100</div>
        <p class="h6 font-weight-bold">Total JobFair</p>
        <p class="h7 text-dark">Jumlah jobfair terdaftar</p>
      </div>
    </div>
  </div>

  {{-- Lowongan Terbaru --}}
  <div class="row px-5 py-5 bg-grey">
    <div class="col-12">
      <div class="head-lowongan text-center">
        <div class="h3 font-weight-bold">Lowongan Terbaru</div>
        <div class="lead">Berikut ini adalah daftar lowongan terbaru di Graduwork</div>    
      </div>
      <div class="card-deck mt-3">
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">PHP Programmer</h5>
            <h6 class="card-text font-weight-bold">Oleh PT. Taruna Bhakti</h6>
            <div class="card-text">Rp 3.000.000 - 5.000.000</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Android Developer</h5>
            <h6 class="card-text font-weight-bold">Oleh PT. Taruna Bhakti</h6>
            <div class="card-text">Rp 5.000.000 - 7.000.000</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Java Programmer</h5>
            <h6 class="card-text font-weight-bold">Oleh PT. Taruna Bhakti</h6>
            <div class="card-text">Rp 4.000.000 - 6.000.000</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
    <a href="#" class="btn btn-primary mx-auto mt-3">Lihat Semua</a>
  </div>

  {{-- JobFair Terbaru --}}
  <div class="row px-5 py-5 bg-light">
    <div class="col-12">
      <div class="head-jobfair text-center">
        <div class="h3 font-weight-bold">Job Fair Terbaru</div>
        <div class="lead">Berikut ini adalah daftar Job Fair terbaru di Graduwork</div>    
      </div>
      <div class="card-deck mt-3">
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Job Matching SMK Taruna Bhakti</h5>
            <h6 class="card-text font-weight-bold">Oleh SMK Taruna Bhakti</h6>
            <div class="card-text">29 September 2019</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
            <div class="card-text">50 orang</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Job Matching SMK Harvard</h5>
            <h6 class="card-text font-weight-bold">Oleh SMK Harvard</h6>
            <div class="card-text">29 September 2019</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
            <div class="card-text">50 orang</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card shadow-sm">
          <img src="image/stealth.png" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Job Matching SMK Oxford</h5>
            <h6 class="card-text font-weight-bold">Oleh SMK Oxford</h6>
            <div class="card-text">29 September 2019</div>
            <div class="card-text">Jalan Raya Pekapuran Kel. Curug Kec. Cimanggis</div>
            <div class="card-text">50 orang</div>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    
      {{-- @foreach ($blog as $post)
    <!-- List Post -->
      

        <div class="card m-2 shadow-sm" style="width: 18rem;">
          <img src="{{asset('image/stealth.png')}}" class="card-img-top" alt="...">
          <div class="card-body" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
            <h5 class="card-title font-weight-bold"> 
              <a class="text-dark" href="{{route('details',$post->id)}}">{{$post->title}}</a>
            </h5>
            <p class="card-text">
              {{$post->isi}}
            </p>
            <a href="{{route('details',$post->id)}}" class="btn btn-primary">View More</a>
          </div>
        </div>


        
    
    @endforeach --}}
@endsection