@extends('layout.layout')


@section('title')
    | Our Product
@endsection

@section('content')
<main id="collections">
    <div class="main container-fluid">
        <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
            <h2 class="display-6">All Product</h2>
        </div>
        @foreach ($post as $key=>$value)
        <div class="col-lg-6 m-auto">
            <div class="mcontainer">
                <a href="/product/{{$value->title}}">
                    <img src="{{asset("")}}assets/images/Gallery/{{$value->title}}/1.JPG" alt="Abstract" class="image oversize" width="600">
                    <div class="middle">
                        <div class="text">{{$value->title}}</div>
                    </div>
                </a>
            </div>   
        </div>
        @endforeach
    </div>
</main>
@endsection