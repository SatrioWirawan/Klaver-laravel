@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="m-4">
        <h2>Add Data</h2>
            <form action="/category" method="POST">
                @csrf
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
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
    </div>
</div>
@endsection

@push('script')
<script src="{{asset('')}}plugins/datatables-bs4/php/upload-image.php"></script>
@endpush