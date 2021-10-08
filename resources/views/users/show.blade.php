@extends('layout.dashboard')

@section('content')
<div class="card m-2">
    <div class="m-2">
        <h2>Detail Pengguna {{$users->id}}</h2>
        <hr>
        <h4>Nama user:  {{$users->name}}</h4>
        <p>Alama email: {{$users->email}}</p>
        <p>Password: {{$users->password}}</p>
    </div> 
</div>
@endsection