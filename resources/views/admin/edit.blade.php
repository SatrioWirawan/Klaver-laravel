@extends('layout.dashboard')

@section('content')

<div class="card m-2">
    <div class="m-2">
        <h2>Edit Product {{$post->id}}</h2>
    <form action="/admin/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nama Product</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
            @error('title')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
            @error('deskripsi')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga">
            @error('harga')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="foto">Foto</label>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form>
            @error('foto')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    </div> 
</div>
@endsection