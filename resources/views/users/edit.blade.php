@extends('layout.dashboard')

@section('content')
<div class="card m-2">
    <div class="m-2">
        <div class="card-header">
            <h1 class="card-title">Edit users</h1>
          </div><br>
        <form action="/users/{{$users->id}}" method="POST">

            @csrf
            @method('put')
            <div class="form-group">
                <label for="name">Nama :</label>
                <input type="text" class="form-control" name="name" value="{{$users->name}}" id="name" placeholder="Masukan name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Alamat email</label>
                <input type="text" class="form-control" name="email" value="{{$users->email}}" id="email" placeholder="Masukkan email">
                @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" name="password" value="{{$users->password}}" id="password" placeholder="Masukkan Password">
                @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>&nbsp;
            <a href="/users" class="btn btn-default my-2">kembaali</a>
        
        </form>
    </div>
</div>
@endsection