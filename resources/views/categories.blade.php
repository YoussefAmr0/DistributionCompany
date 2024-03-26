@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/categories.css') }}">

@endsection
@section('content')

  <div class="container">
    <div class="slideshow-wrapper ">
      <div class="slideshow-container">
        <div class="slides-container text-center">
          <div class="slide ">
            <img src="{{ asset('img') }}/calendar.png" alt="Image 1">
          </div>
          <div class="slide tex">
            <img src="{{ asset('img') }}/glue.png" alt="Image 2">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/dispenser.png" alt="Image 3">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/scissors.png" alt="Image 4">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/paper-clips.png" alt="Image 5">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/staples.png" alt=" ">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/remover.png" alt=" ">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/calculator.png" alt=" ">
          </div>
          <div class="slide">
            <img src="{{ asset('img') }}/sticky-notes2.png" alt=" ">
          </div>
        </div>
      </div>
      <a class="prev" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></a>
      <a class="next" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></a>
    </div>
  </div>

  <script src="textanimation.js"></script>

  <!-- ----------------------------------------cards 1 ------------------------------------------------------->


  <div class="container">
    <div class="cards d-flex justify-content-around mt-5 mb-5 row">
      <div class="shop-now position-relative">
        <h5 >You may like</h5>

 
    </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/clips.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Hrimtd 40 pieces Double clip
              clips 19 mm </h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/calender.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Wooden Vintage Calender Desk Wooden Office</h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/metal-cup.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Mesh pen cup metal pencil for
              Desk 6 packs </h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/sticky-notes.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Post-it 654-5uc Sticky Notes, 3*3 in assorted, pk24</h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  </div>
  <div class="best position-relative">
    <h1>Bestsellers</h1>
    </div>
    
    
  <!-- footer--------------------------------------------------------------------------- -->
   <!-- best -->
   <div class="container">
    <div class="cards d-flex justify-content-around mt-5 mb-5 row">
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/sticky-notes.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Post-it 654-5uc Sticky Notes, 3*3 in assorted, pk24</h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/calc.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Casio fx-570esplus-2wdtv digital calculator - black </h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/animalpens.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">BTS Cartoon Animal pens black ink writing pen </h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
        <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
          <div class="position-relative">
            <img src="{{ asset('img') }}/calender.png" class="card-img-top" alt="...">
            <a href="#" class="position-absolute bottom-0 end-0"><i class="cart-icon fa-sharp fa-solid fa-cart-plus fa-2x"></i></i></a>
          </div>
          <div class="card-body">
            <h6 class="card-title">Wooden Vintage Calender Desk Wooden Office</h6>
            <p class="card-price">EGP 90 <del>102</del></p>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <a class="selling-out">Selling out fast</a>
          </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  </div>
 
@endsection