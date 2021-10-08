@extends('layout.dashboard')

@section('content')
<div class="card m-2">
    <div class="m-2">
        <h2>Show Cast {{$post->id}}</h2>
        <hr>
        <h4>Nama Product: {{$post->title}}</h4>
        <p>Deskripsi: {{$post->deskripsi}}</p>
        <p>Foto: {{$post->foto}}</p>
        <p>Harga: Rp.{{$post->harga}}</p>
    </div> 
</div>
@endsection