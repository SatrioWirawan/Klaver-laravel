@extends('layout.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
      <h1 class="card-title">Product data</h1>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>#</th>
          <th>Nama Category</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($post as $key=>$value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->content}}</td>
                <td>
                    <button type="button" id="" class="btn btn-outline-secondary border-1 p-1">
                        <a class="" href="/category/{{$value->id}}" style="color: black;">
                            <span class="far fa-file-alt"></span>
                            show
                        </a>
                    </button>
                    <button type="button" id="" class="btn btn-outline-secondary border-1 p-1">
                        <a class="" href="/category/{{$value->id}}/edit" style="color: black;">
                            <span class="fas fa-edit"></span>
                            Edit
                        </a>
                    </button>
                    <form action="/category/{{$value->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger mr-1" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No data</td>
            </tr>
            @endforelse
        </tbody>    
      </table>
      <a href="/category/create" class="btn btn-primary m-2">Add</a>
    </div>
    <!-- /.card-body -->

</div>
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
@push('table-script')
<script src="{{asset('')}}plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('')}}plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
@endsection