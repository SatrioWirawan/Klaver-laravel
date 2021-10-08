@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="m-4">
        <h2>Tambah Admin</h2>
            <form action="/users" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Admin</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="name">
                    @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Alamat  email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="email">
                    @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" placeholder="password">
                    @error('password')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
               
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
</div>
@endsection

@push('script')
<script src="{{asset('')}}plugins/datatables-bs4/php/upload-image.php"></script>
@endpush