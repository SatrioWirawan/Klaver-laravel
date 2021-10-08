@extends('layout.dashboard')

@section('content')
<div class="card m-2">
    <div class="m-2">
        <h2>Show Category {{$post->id}}</h2>
        <hr>
        <h4>Category: {{$post->title}}</h4>
        <p>Deskripsi: {{$post->content}}</p>
    </div> 
</div>
@endsection