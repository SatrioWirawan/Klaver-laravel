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
        <h3 class="product-title">VOL1 ABSTRACT OVERSIZED SHIRT</h3>
        <p style="margin: 2% 30% 1%; font-size: 22px;">IDR XX,XXX.XX</p>
        <p style="margin: 0% 30% 4%; font-size: 16px;">In Stock</p>
        <div class="container">
          <div class="mySlides">
            <div class="numbertext">1 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0198.JPG" alt="Abstract"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0199.JPG" alt="Abstract"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0200.JPG" alt="Abstract"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9074.JPG" alt="Abstract"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">5 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9069.JPG" alt="Abstract"/>
          </div>

          <div class="mySlides">
            <div class="numbertext">6 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9070.JPG" alt="Abstract"/>
          </div>
          <div class="mySlides">
            <div class="numbertext">7 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9071.JPG" alt="Abstract"/>
          </div>
          <div class="mySlides">
            <div class="numbertext">8 / 8</div>
            <img src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9073.JPG" alt="Abstract"/>
          </div>

          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
          
          <div class="caption-container">
            <p id="caption"></p>
          </div>

          <div class="row">
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0198.JPG" style="width: 100%" onclick="currentSlide(1)" alt="Abstract"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0199.JPG" style="width: 100%" onclick="currentSlide(2)" alt="Abstract"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_0200.JPG" style="width: 100%" onclick="currentSlide(3)" alt="Abstract"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9074.JPG" style="width: 100%" onclick="currentSlide(4)" alt="Abstract"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9069.JPG" style="width: 100%" onclick="currentSlide(5)" alt="Abstract"/>
            </div>
            <div class="column">
              <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9070.JPG" style="width: 100%" onclick="currentSlide(6)" alt="Abstract"/>
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9071.JPG" style="width: 100%" onclick="currentSlide(7)" alt="Abstract"/>
            </div>
            <div class="column">
                <img class="demo cursor" src="{{asset('')}}assets/images/Gallery/Abstract/IMG_9073.JPG" style="width: 100%" onclick="currentSlide(8)" alt="Abstract"/>
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