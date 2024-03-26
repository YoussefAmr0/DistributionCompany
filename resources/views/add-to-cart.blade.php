@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/add-to-cart.css') }}">
@endsection
@section('content')

<body>
        <div class="container row d-flex">
      <div class="nft">
        <div class='main col-12'>
          <img class='tokenImage' src="imgs/sticky.png" alt="NFT" />
          <h2>Hrimtd 40 pieces Double clip
            clips 19 mm </h2>
            <p style="color: rgb(149, 138, 138);">EGP<del style="color:  rgb(149, 138, 138);">102</del> <ins
                style="color: black;">90</ins style="color: rgb(149, 138, 138);">EGP</p>
                                  <!-- Quantity -->
                                  <div class="d-flex mb-4">
                                    <button class="btn btn-primary px-3 me-2 "style=" width: 30px; height: 30px; background-color: #ffffffb8;"
                                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                      <i class="fa-solid fa-minus"></i>
                                    </button>
                  
                                    <div class="form-outline">
                                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                                      <label class="form-label" for="form1">Quantity</label>
                                    </div>
                  
                                    <button class="btn btn-primary px-3 ms-2" style=" width: 30px; height: 30px; background-color: #ffffffb8;"
                                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                      <i class="fa-solid fa-plus" style="color: #000000;"></i>
                                    </button>
                                  </div>
                                  <!-- Quantity -->
          <div class='tokenInfo'>
            <div class="price">
               <p>View Available Offers</p>
            </div>
            <div class="duration">
              <ins>◷</ins>
              <p>11 days left</p>
            </div>
          </div>
          <hr />
        </div>
      </div>     
      <div class="nft" style="background-color:#30647e;">
        <div class='main col-12'>
          <h2>Hrimtd 40 pieces Double clip
            clips 19 mm </h2>
            <h6>subtotal</h6>
            <p style="color: rgb(149, 138, 138);">EGP<del style="color:  rgb(149, 138, 138);">102</del> <ins
                style="color: black;">90</ins style="color: rgb(149, 138, 138);">EGP</p>
                <h6>shipping fee</h6>
            <p>30</ins style="color: rgb(149, 138, 138);">EGP</p>
          <div class='tokenInfo'>
            <div class="price">
               <p>View Available Offers</p>
            </div>
            <div class="duration">
              <a >items:1</a>
            </div>
          </div>
          <hr />
          <p>total</p>
          <p >120</ins style="color: rgb(149, 138, 138);">EGP</p>
          <button style="border: none; border-radius: 12px; background-color:#FFFFFF ;">checkout</button>
      </div>
      </div>
    </div>
    <div class="container">
        <div class="shop-now position-relative">
            <h5 style="
            margin-bottom: 220px;
            position: absolute;
            left: 90px;
            top: 200px;
            width: 220px;
            height: 48px;
            font-family: 'Lato';
            font-style: normal;
            font-size: 40px;
        line-height: 48px;
        /* identical to box height */
        text-align: center;
        
        color: #1C6E97;
        
        ">You may like</h5>
 
        </div>
        <!---------------------------------------- recommended text------------------------------------------------------->
            <div class="cards row g-0">
                <div class="col-lg-4 col-md-6 col-sm-12 project position-relative">
                    <div class="card " style="width: 16rem; margin-top: 300px; left: 60px; display: inline-block; ">
                        <img src="imgs/sticky-notes.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Post-it 654-5uc Sticky Notes
                                ,3*3 in assorted,pk24 </h6>
                            <p style="color: rgb(149, 138, 138);">EGP<del style="color:  rgb(149, 138, 138);">102</del> <ins
                                    style="color: black;">90</ins style="color: rgb(149, 138, 138);">EGP</p>
                            <!-- <a><i class="fa-solid fa-heart" style="color: rgb(161, 57, 57);"></i> </a> -->
                            <a> <i class="fa-solid fa-cart-shopping" style="color:rgb(149, 138, 138)"></i></a>
                            <i class="fa-regular fa-heart" style="color:rgb(149, 138, 138)"></i>
                            <a style="/* Selling out fast */
                            width: 129px;
                            height: 24px;
                            font-family: 'Lato';
                            font-style: normal;
                            font-weight: 400;
                            font-size: 20px;
                            line-height: 24px;
                            /* identical to box height */
                            letter-spacing: -0.165px;       
                            color: #000000;            
                            opacity: 0.7;              
                            /* Inside auto layout */
                            flex: none;
                            order: 1;
                            flex-grow: 0;
                            ">Selling out fast</a>
                        </div>
                    </div>
                </div>
                <!--------------------------- img1----------------------------------------------------------------------------------- -->
                <div class="col-lg-4 col-md-6 col-sm-12 project position-relative">
                    <div class="card " style="width: 16rem; margin-top: 300px; left: 60px; display: inline-block; ">
                        <img src="imgs/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Casio fx-570esplus-2wdtv digital calculator - black </h6>
                            <p style="color: rgb(149, 138, 138);">EGP<del style="color:  rgb(149, 138, 138);">102</del> <ins
                                    style="color: black;">90</ins style="color: rgb(149, 138, 138);">EGP</p>                 
                                           <!-- <a><i class="fa-solid fa-heart" style="color: rgb(161, 57, 57);"></i> </a> -->
                                    <a> <i class="fa-solid fa-cart-shopping" style="color:rgb(149, 138, 138)"></i></a>
                                    <i class="fa-regular fa-heart" style="color:rgb(149, 138, 138)"></i>
                                    <a style="/* Selling out fast */
                                    width: 129px;
                                    height: 24px;
                                    font-family: 'Lato';
                                    font-style: normal;
                                    font-weight: 400;
                                    font-size: 20px;
                                    line-height: 24px;
                                    /* identical to box height */
                                    letter-spacing: -0.165px;       
                                    color: #000000;            
                                    opacity: 0.7;              
                                    /* Inside auto layout */
                                    flex: none;
                                    order: 1;
                                    flex-grow: 0;
                                    ">Selling out fast</a>
                        </div>
                    </div>
                </div>
                <!---------------------- img2--------------------------------------------------->
                 
                <!-- img3--------------------------------------------------------------- -->
            </div>

        <!-- ---------------------------------------recommended------------------------------>
    </div>
 @endsection