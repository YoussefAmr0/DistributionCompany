<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @yield('css-file')
    <link rel="stylesheet" href="https://unpkg.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('img') }}/logo.png" alt="Logo" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">School Supplies</a></li>
                <li><a class="dropdown-item" href="#">Office Supplies</a></li>
                <li><a class="dropdown-item" href="#">Papers</a></li>
                <li><a class="dropdown-item" href="#">Art & Colors</a></li>
                <li><a class="dropdown-item" href="#">Pens</a></li>
                <li><a class="dropdown-item" href="#">Measuring</a></li>
                <li><a class="dropdown-item" href="#">Toys & Gifts</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log in</a>
            </li>
          </ul>
          <div class="right-nav d-flex">
            <form class="d-flex mt-4" role="search">
              <input class="form-control me-2" type="search" placeholder="What are you looking for?" aria-label="Search">
              <i class="fa-solid fa-cart-shopping m-2"></i>
              <i class="fa-regular fa-heart mt-2"></i>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->