@extends('layouts.app')

@section('content')
<div class="jumbotron-fluid p-5 bg-info text-light" style="margin-top:-25px;">
  <div class="container py-5">
    <h1 class="display-5">Lulusan</h1>  
    <h1 class="lead">Cari lulusan dari berbagai sekolah di nusantara</h1>  
    {{-- <div class="mt-3">  
      <a href="#" class="btn btn-primary mr-3">Cari Lowongan</a>
      <a href="#" class="btn btn-primary mr-3">Cari Job Fair</a>
    </div> --}}
  </div>
</div>
<div class="container-fluid bg-grey">
  {{-- Daftar Lulusan --}}
  <div class="row px-5 py-5 bg-light">
    <div class="col-12">
      <div class="head-lulusan text-center d-flex">
        <form class="form-inline mx-auto" action="lulusan/search" method="GET">
            @csrf
            <div class="form-group mb-2">                
                <input type="text" class="form-control" id="nama" placeholder="Cari lulusan">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cari</button>
        </form>        
        {{-- <div class="h3 font-weight-bold">Job Fair Terbaru</div>
        <div class="lead">Berikut ini adalah daftar Job Fair terbaru di Graduwork</div>     --}}
      </div>
      <div class="card-deck mt-3">
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                    
      </div>
      <div class="card-deck mt-3">
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                    
      </div>
      <div class="card-deck mt-3">
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
          </div>          
        </div>                
        <div class="card shadow-sm text-center py-3">
          <img src="image/user_default.png" class="card-img-top rounded rounded-circle w-25 mx-auto" alt="image">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Ujang Mamang Suprianto</h5>
            <h6 class="card-text font-weight-bold">SMK Taruna Bhakti</h6>                        
            <a href="#" class="btn btn-sm btn-primary">Lihat Profile</a>
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