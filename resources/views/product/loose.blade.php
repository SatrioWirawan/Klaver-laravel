@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{asset('')}}assets/css/product.css">
@endsection

@section('title')
| Product
@endsection

@section('content')
<main>
    <div class="back">
      <a class="klav" href="/product">
          ❮ back to All Product
      </a>
  </div>
    <div id="gallery-carousel">
        <h3 class="product-title">VOL1 LOOSE STRIPE SHIRT</h3>
        <p style="margin: 2% 30% 1%; font-size: 22px;">IDR XX,XXX.XX</p>
        <p style="margin: 0% 30% 4%; font-size: 16px;">In Stock</p>
        <div class="container">
          <div class="mySlides">
            <div class="numbertext">1 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/061778eb-daa5-4f5f-a4b5-c41e16a1fd0a.JPG" alt="Loose"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/0456f3b8-3b2f-47bb-a26e-2183c1c6384a.JPG" alt="Loose"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9054.JPG" alt="Loose"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9055.JPG" alt="Loose"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9056.jpg" alt="Loose"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">6 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9057.JPG" alt="Loose"/>
          </div>
          <div class="mySlides">
            <div class="numbertext">7 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9058.JPG" alt="Loose"/>
          </div>
          <div class="mySlides">
            <div class="numbertext">8 / 8</div>
            <img src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9059.JPG" alt="Loose"/>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
          
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/061778eb-daa5-4f5f-a4b5-c41e16a1fd0a.JPG" style="width: 100%" onclick="currentSlide(1)" alt="Loose"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/0456f3b8-3b2f-47bb-a26e-2183c1c6384a.JPG" style="width: 100%" onclick="currentSlide(2)" alt="Loose"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9054.JPG" style="width: 100%" onclick="currentSlide(3)" alt="Loose"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9055.JPG" style="width: 100%" onclick="currentSlide(4)" alt="Loose"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9056.jpg" style="width: 100%" onclick="currentSlide(5)" alt="Loose"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9057.JPG" style="width: 100%" onclick="currentSlide(6)" alt="Loose"/>
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9058.JPG" style="width: 100%" onclick="currentSlide(7)" alt="Loose"/>
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset("")}}assets/images/Gallery/Loose stripe shirt/IMG_9059.JPG" style="width: 100%" onclick="currentSlide(8)" alt="Loose"/>
            </div>
          </div>
        </div>
      </div>
    <div id="product-decs" style="margin: 2% 30% 2%;">
        <h5>Product Description</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="row m-auto">
        <h5>Order:</h5>
        <a href="https://api.whatsapp.com/message/USMM72M74XLLO1" class="fcontainer col-6" target="_blank">
            <div>
              <img class="sns-img left" src="{{asset('')}}assets/images/Klaver.Id/WhatsApp.svg" alt="">
            </div>
        </a>
        <a href="https://shopee.co.id/klaver.id" class="fcontainer col-6" target="_blank">
          <div>
            <img class="sns-img right" src="{{asset('')}}assets/images/Klaver.Id/721px-Shopee_logo.svg.png" alt="">
          </div>
        </a>  
    </div>
  </main>
@endsection
@push('script')
<script src="{{asset("")}}assets/js/carousel.js"></script>
@endpush