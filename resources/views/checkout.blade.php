@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/checkout.css') }}">

@endsection
@section('content')

  <div class="billing container">
    <form action="/action_page.php">
      <div class="row">
        <div class="col-50">
          <h3>Billing Address</h3>
          <label for="fname"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Enter your name">
          <label for="email"><i class="fa fa-envelope"></i> Email</label>
          <input type="text" id="email" name="email" placeholder="Enter your email">
          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="adr" name="address" placeholder="Your address">
          <label for="city"><i class="fa fa-institution"></i> City</label>
          <input type="text" id="city" name="city" placeholder="Your city">

          <div class="row">
            <div class="col-50">
              <label for="state">Additional information</label>
              <input type="text" id="Additional information" name=" placeholder=" NY">
            </div>
            <div class="col-50">
              <label for="zip">Floor number</label>
              <input type="text" id="zip" name="zip" placeholder="">
            </div>
          </div>
        </div>

        <div class="col-50">
          <div class="nft">
            <div class='main'>
              <img class='tokenImage' src="{{ asset('img') }}/sticky.png" alt="NFT" />
              <h6>Hrimtd 40 pieces Double clip
                clips 19 mm </h6>
              <p style="color: rgb(149, 138, 138);">EGP<del style="color:  rgb(149, 138, 138);">102</del> <ins
                  style="color: black;">90</ins style="color: rgb(149, 138, 138);">EGP</p>
              <!-- Quantity -->
              <div class="d-flex mb-4">
                <button class="btn btn-primary px-3 me-2 "
                  style=" width: 30px; height: 30px; background-color: #ffffffb8;"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fa-solid fa-minus"></i>
                </button>

                <div class="form-outline">
                  <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                  <label class="form-label" for="form1">Quantity</label>
                </div>

                <button class="btn btn-primary px-3 ms-2"
                  style=" width: 30px; height: 30px; background-color: #ffffffb8;"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fa-solid fa-plus" style="color: #000000;"></i>
                </button>
              </div>
              <hr />

            </div>
          </div>
          <div class="bg">

          </div>
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn-checkout">
    </form>
  </div>
  </div>
  </div>
 @endsection