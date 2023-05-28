<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css">
    <title>Cuisine Mall</title>
</head>
<body>
 <!--Navigation & Intro-->
<header>


  <!--Navbar-->
  <nav class="navbar navbar-toggleable-md navbar-dark ">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/cuisinelogo.png')}}" width="100px">
      </a>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#!">ACCUEIL<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('products.index') }}">PRODUITS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">SERVICE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">Rechercher</a>
        </li>
      </ul>

      <!--Navbar icons-->
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="bi bi-whatsapp"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!--/.Navbar-->

</header>
<!--/Navigation & Intro-->

<!--Mask-->
<div class="view hm-black-light">
  <div class="full-bg-img flex-center pattern-4">
    <ul>
      <li>
        <h1 class="h1-responsive wow fadeInUp title"><strong>Hey, wanna eat something?</strong></h1></li>
      <li>
        <div class="row wow fadeIn" data-wow-delay="0.4s">
          <div class="col-md-3">
            <div class="md-form">
              <input type="text" id="form1" class="form-control">
              <label for="form1">Your city</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="md-form">
              <input type="text" id="form2" class="form-control validate">
              <label for="form2">Street</label>
            </div>
          </div>
          <div class="col-md-2">
            <div class="md-form">
              <input type="text" id="form3" class="form-control validate">
              <label for="form3">House</label>
            </div>
          </div>
          <div class="col-md-3">
            <div class="md-form">
              <button class="btn btn-lg btn-danger">Order</button>
            </div>
          </div>
        </div>
      </li>
      <li class="payment">
        <i class="fa fa-cc-visa fa-2x" aria-hidden="true"></i>
        <i class="fa fa-cc-mastercard fa-2x" aria-hidden="true"></i>
        <i class="fa fa-money fa-2x" aria-hidden="true"></i>
      </li>
    </ul>
  </div>
</div>
<!--/.Mask-->
