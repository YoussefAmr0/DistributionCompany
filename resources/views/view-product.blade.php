@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/view-product.css') }}">
@endsection

@section('content')

<div class="view-product">
  <div id="container">

    <div class="product-details">

      <h1>STICKY NOTES</h1>
      <span class="hint-star star">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
      </span>

      <p class="information">"400 pcs Page Markers Sticky index..</p>



      <div class="control">

        <button class="btn-product">
          <span class="price">90LE</span>
          <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
          <span class="buy">buy now</span>
        </button>

      </div>

    </div>

    <div class="product-image">

      <img src="{{ asset('img') }}/sticky.png" alt="">


      <div class="info">
        <h2> Description</h2>
        <ul>
          <li><strong>Height : </strong>3cm </li>
          <li><strong>Shade : </strong>10 shades</li>

        </ul>
      </div>
    </div>

  </div>
</div>
@endsection