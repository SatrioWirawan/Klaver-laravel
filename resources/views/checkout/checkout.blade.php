@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{asset('')}}assets/css/checkout.css">
@endsection

@section('title')
    | Checkout
@endsection

@section('content')
<div class="col-md-12 col-lg-12">
    <h4 class="mb-3">Billing address</h4>
    <form class="needs-validation" novalidate="">
      <div class="row g-3">
        <div class="col-sm-12">
          <label for="firstName" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        {{-- <div class="col-sm-6">
          <label for="lastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div> --}}

        <div class="col-12">
          <label for="username" class="form-label">Username</label>
          <div class="input-group has-validation">
            {{-- <span class="input-group-text">@</span> --}}
            <input type="text" class="form-control" id="username" placeholder="Username" required="">
          <div class="invalid-feedback">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-12">
          <label for="address" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="col-md-6">
          <label for="state" class="form-label">Provinsi</label>
          <input type="text" class="form-control" id="state" placeholder="" required="">
          {{-- <div class="invalid-feedback">
          </div> --}}
        </div>

        <div class="col-md-6">
          <label for="zip" class="form-label">Kode Pos</label>
          <input type="text" class="form-control" id="zip" placeholder="" required="">
          {{-- <div class="invalid-feedback">
          </div> --}}
        </div>
      </div>

      <hr class="my-4">
      <div id="save-info" class="col-md-6">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
    
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Save this information for next time</label>
          </div>
      </div>
      

      {{-- <hr class="my-4">

      <h4 class="mb-3">Payment</h4>

      <div class="my-3">
        <div class="form-check">
          <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
          <label class="form-check-label" for="credit">Credit card</label>
        </div>
        <div class="form-check">
          <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
          <label class="form-check-label" for="debit">Debit card</label>
        </div>
        <div class="form-check">
          <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
          <label class="form-check-label" for="paypal">PayPal</label>
        </div>
      </div>

      <div class="row gy-3">
        <div class="col-md-6">
          <label for="cc-name" class="form-label">Name on card</label>
          <input type="text" class="form-control" id="cc-name" placeholder="" required="">
          <small class="text-muted">Full name as displayed on card</small>
          <div class="invalid-feedback">
            Name on card is required
          </div>
        </div>

        <div class="col-md-6">
          <label for="cc-number" class="form-label">Credit card number</label>
          <input type="text" class="form-control" id="cc-number" placeholder="" required="">
          <div class="invalid-feedback">
            Credit card number is required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-expiration" class="form-label">Expiration</label>
          <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
          <div class="invalid-feedback">
            Expiration date required
          </div>
        </div>

        <div class="col-md-3">
          <label for="cc-cvv" class="form-label">CVV</label>
          <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
          <div class="invalid-feedback">
            Security code required
          </div>
        </div>
      </div> --}}

      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
    </form>
  </div>
@endsection

@push('script')
<script src="{{asset('')}}assets/js/form-validation.js"></script>
@endpush