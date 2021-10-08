@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{asset('/')}}assets/css/contact.css">
@endsection

@section('title')
    | Profile
@endsection

@section('content')
<main id="features">
    <h1>If you have something to say just hit the icons below</h1>
    <br>
    <div class="row m-auto">
        <a href="https://api.whatsapp.com/message/USMM72M74XLLO1" class="fcontainer col-lg-4" target="_blank">
            <div>
                <img src="assets/images/Klaver.Id/WhatsApp.svg" alt="">
                <h3 class="fw-bold">WhatsApp</h3>
                <p class="fw-light">0812 1302 6309</p>
            </div>
        </a>
        <a href="https://www.instagram.com/klaver.id" class="fcontainer col-lg-4" target="_blank">
            <div>
                <img src="https://www.freepnglogos.com/uploads/instagram-logos-png-images-free-download-2.png" alt="" />
                <h3 class="fw-bold">Instagram</h3>
                <p class="fw-light">instagram.com/klaver.id</p>
            </div>
        </a>
        <a href="https://shopee.co.id/klaver.id" class="fcontainer col-lg-4" target="_blank">
            <div>
                <img src="assets/images/Klaver.Id/721px-Shopee_logo.svg.png" alt="">
                <h3 class="fw-bold">Shopee</h3>
                <p class="fw-light">shopee.co.id/klaver.id</p>
            </div>
        </a>  
    </div>
</main>
@endsection