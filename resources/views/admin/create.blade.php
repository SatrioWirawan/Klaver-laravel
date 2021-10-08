@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="m-4">
        <h2>Tambah  Data</h2>
            <form action="/admin" method="POST">
                @csrf
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
                        <input type="file" name="photo" id="photo">
                        <input type="submit" value="Upload Image" name="submit">
                    </form>
                    @error('foto')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
</div>
@endsection

@push('script')
{{-- <script src="{{asset('')}}plugins/datatables-bs4/php/upload-image.php"></script> --}}
@endpush