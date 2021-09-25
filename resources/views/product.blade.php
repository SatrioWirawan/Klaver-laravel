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
        <div id="gal-row" class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-2">
            <div class="col-lg-6">
                <div class="mcontainer">
                    <a href="/product/abstract">
                        <img src="assets/images/Gallery/Abstract/IMG_0199.JPG" alt="Abstract" class="image oversize" width="600">
                        <div class="middle">
                            <div class="text">VOL1 ABSTRACT OVERSIZED SHIRT</div>
                        </div>
                    </a>
                </div>   
            </div>
            <div class="col-lg-6 ">
                <div class="mcontainer">
                    <a href="/product/baloon">
                        <img src="assets/images/Gallery/Baloon shirt/IMG_9964.JPG" alt="Baloon" class="image" width="600">
                        <div class="middle">
                            <div class="text">VOL1 BALOON SHIRT</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="gal-row" class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-2">
            <div class="col-lg-6">
                <div class="mcontainer">
                    <a href="/product/loose">
                        <img src="assets/images/Gallery/Loose stripe shirt/IMG_9059.JPG" alt="Loose" class="image" width="600">
                        <div class="middle">
                            <div class="text">VOL1 LOOSE STRIPE SHIRT</div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div  class="mcontainer">
                    <a href="/product/pocket">
                    <img src="assets/images/Gallery/Oversize pocket tee/IMG_0178.JPG" alt="pocket" class="image" width="600">
                    <div class="middle">
                        <div class="text">VOL1 OVERSIZED POCKET TEE</div>
                    </div>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</main>
@endsection