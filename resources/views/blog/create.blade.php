@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admin.index')}}" class="btn btn-primary mb-3">
    <i class="fas fa-arrow-left"></i>Back
</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">Create post </h1>
            <form action="{{ route('admin.store') }}" method="Post">
                  @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
                <label for="isi">Isi</label>
                <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
                <input type="submit" value="POST" class="btn btn-primary mt-3">

            </form>
        </div>
    </div>
</div>



@endsection
