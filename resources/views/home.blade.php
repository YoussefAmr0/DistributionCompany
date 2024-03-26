@extends('layouts.app')
@section('css-file')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('content')
    
    <!-- -------------------------------Start header---------------------------------------------- -->

    <div class="header">
        <div class="d-flex justify-content-around flex-column flex-md-row row">
            <div class="left-header text-center col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <p class="back-to-school">BACK TO SCHOOL</p>
                <p class="special-offer">Special 50% Off</p>
                <p class="product-solution">"Discover the Perfect Product Library Solution for Your Distribution Company"</p>
                <button class="">Shop now</button>
            </div>
            <div class="right-header text-center col-lg-6 col-md-6 col-sm-12 col-xs-12 row">
                <img class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12" src="{{ asset('img/') }}/header2.png" alt="">
            </div>
        </div>
    </div>


    <!-- ------------------------------- End header---------------------------------------------- -->
    <div class="container">
        <div class="slideshow-wrapper">
            <div class="slideshow-container">
                <div class="slides-container text-center">
                    <div class="slide ">
                        <img src="{{ asset('img/') }}/calendar.png" alt="Image 1">
                    </div>
                    <div class="slide tex">
                        <img src="{{ asset('img/') }}/glue.png" alt="Image 2">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/dispenser.png" alt="Image 3">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/scissors.png" alt="Image 4">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/paper-clips.png" alt="Image 5">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/staples.png" alt=" ">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/remover.png" alt=" ">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/calculator.png" alt=" ">
                    </div>
                    <div class="slide">
                        <img src="{{ asset('img/') }}/sticky-notes2.png" alt=" ">
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
            <div class="mb-5 col-md-12 col-sm-12 col-xs-12">
                <h5>Recommended for you</h5>
            </div>
            <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                <div class="position-relative">
                    <img src="{{ asset('img/') }}/calc.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/sticky-notes.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/sticky.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/animalpens.png" class="card-img-top" alt="...">
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
    <div class="d-flex justify-content-around all-btn m-5 text-center">
        <button class="">View All Products</button>
    </div>
    <div class="office-supplies ">
        <div class="container d-flex justify-content-between mt-5 row text-center">
            <div class="left-side mt-2 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p>Check More Products For Office Supplies</p>
            </div>
            <div class="right-side mt-2 col-lg-6 col-md-12 col-sm-12 col-xs-12 "><a href="">See All</a></div>
        </div>
    </div>
    </div>
    </div>

    </div>
    <!-- end card 1 -->

    <div class="container">
        <div class="cards d-flex justify-content-around mt-5 mb-5 row">
            <div class="mb-5 col-md-12 col-sm-12 col-xs-12">
            </div>
            <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                <div class="position-relative">
                    <img src="{{ asset('img/') }}/metal-cup.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/clips.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/calender.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/sticky-notes.png" class="card-img-top" alt="...">
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
    <div class="d-flex justify-content-around all-btn m-5 text-center">
        <button class="">View All Products</button>
    </div>
    <div class="office-supplies ">
        <div class="container d-flex justify-content-between mt-5 row text-center">
            <div class="left-side mt-2 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <p>Check More Products For School Supplies</p>
            </div>
            <div class="right-side mt-2 col-lg-6 col-md-12 col-sm-12 col-xs-12 "><a href="">See All</a></div>
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>

    </div>
    <!-- end card 1 -->

    <div class="container">
        <div class="cards d-flex justify-content-around mt-5 mb-5 row">
            <div class="mb-5 col-md-12 col-sm-12 col-xs-12">
            </div>
            <div class="card m-2 col-lg-4 col-md-6 col-sm-12 col-xs-12 ">
                <div class="position-relative">
                    <img src="{{ asset('img/') }}/lunchboxx.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/frozen.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/stitch.png" class="card-img-top" alt="...">
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
                    <img src="{{ asset('img/') }}/image copy.png" class="card-img-top" alt="...">
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
    <div class="d-flex justify-content-around all-btn m-5 text-center">
        <button class="">View All Products</button>
    </div>
    </div>
    </div>

    </div>
@endsection