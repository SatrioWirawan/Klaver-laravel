@extends('layout.dashboard')

@section('content')

<div class="card m-2">
    <div class="m-2">
        <h2>Edit Category {{$post->id}}</h2>
    <form action="/category/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Category</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Deskripsi</label>
            <input type="text" class="form-control" name="content" id="content" placeholder="content">
            @error('content')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    </div> 
</div>
@endsection