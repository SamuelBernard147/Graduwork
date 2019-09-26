@extends('layouts.app')

@section('content')
<div class="jumbotron-fluid bg-info text-light p-5" style="margin-top:-23px;">
  <h1 class="display-4 text-center p-5">{{$blog->title}}</h1>
  <!-- {{-- <p class="lead text-center"></p> --}} -->
</div>
<div class="container pt-4">
  <!-- <h3 class="text-center">My latest blog</h3> -->
  <div class="row justify-content-center col-12 ">
    
    <!-- List blog -->
    <div class="col-md-8">
		<div class="card pt-3 shadow-sm" >
          <img src="{{asset('image/stealth.png')}}" class="card-img w-75 mx-auto" alt="..." >
          <div class="card-body">
            <h3 class="card-title font-weight-bold"> 
              <a class="text-dark" href="{{route('details',$blog->id)}}">{{$blog->title}}</a>
            </h3>
            <p class="card-text">
              {{$blog->isi}}
            </p>
            
          </div>
        </div>	    	
    </div>

    @include('layouts.sidebar')



    


        


        
      </div>
</div>

@endsection
    