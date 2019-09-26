@extends('layouts.app')

@section('content')
<div class="jumbotron-fluid p-5 bg-info text-light" style="margin-top:-25px;">
  <div class="container py-5">
    <h1 class="display-5">Job Fair</h1>  
    <h1 class="lead">Temukan Job Fair yang akan berlangsung</h1>      
  </div>
</div>
<div class="container-fluid bg-grey">
  <div class="row px-5 py-5 bg-light">
    <div class="col-12">
      <div class="head-jobfair text-center d-flex">
        <form class="form-inline mx-auto" action="jobfair/search" method="GET">
            @csrf
            <div class="form-group mb-2">                
                <input type="text" class="form-control" id="nama" placeholder="Cari Jobfair">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Cari</button>
        </form>        
        {{-- <div class="h3 font-weight-bold">Job Fair Terbaru</div>
        <div class="lead">Berikut ini adalah daftar Job Fair terbaru di Graduwork</div>     --}}
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