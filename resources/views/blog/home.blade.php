@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admin.create')}}" class="btn btn-primary mb-3">Create POST</a>
    <div class="card">
        <div class="card-body">
            <h1 class="text-center">My Post</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">isi</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    
                        @foreach ($blog as $blog)
                        <tr>
                        <th >{{$blog->id}}</th>
                        <td >{{$blog->title}}</td>
                        <td style=' white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 75ch;'>{{$blog->isi}}</td>
                            <td>
                                <a href="{{route('delete',$blog->id)}}" class="btn btn-danger">Delete</a> 
                                <a href="{{ route('edit', $blog->id) }}" class="btn btn-primary"  >Edit</a> 
                                <a href="{{route('details',$blog->id)}}" class="btn btn-primary"> View</a> 
                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                    </table>
                    
        </div>
    </div>
</div>
@endsection