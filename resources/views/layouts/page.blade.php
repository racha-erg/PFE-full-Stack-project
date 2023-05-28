<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <!--header-->
{{-- <header id="header">
    <a href=""><img width="130" src="{{ asset('images/cuisinelogo.png') }}" ></a>
    <div class="container-fluid justify-centent-center">
      <nav class="collapse navbar-collapse mx-5 " id="navbarSupportedContent"> --}}
        {{-- <a href="#" id="new-in-link" class="nav-link">Accueil</a>
        <a href="#" class="nav-link">Produits</a>
        <a href="#" class="nav-link">Contact</a>
        <a href="#" class="nav-link">A propose</a>
        <a href="#" class="nav-link">OUTDOOR</a>
        <a href="#" class="nav-link">OUTLET</a>
        <a href="#" class="nav-link">MAGAZINE</a> --}}
          {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-uppercase fs-5 " aria-current="page" href="">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase fs-5" href="" >Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase fs-5" href="">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase fs-5" href="">A propose</a>
          </li>
          <li class="nav-item mx-5">
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control mx-5 me-1" type="text" name="query" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></button>
              </form>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header-icons">
      <span class="icon">&#9884;</span>
      <span class="icon">&cross;</span>
      <span class="icon">&#9993;</span>
    </div>
</header> --}}

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Brand</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  <!--hero-->
  {{-- <div class="hero">
    <img src="https://www.freeiconspng.com/uploads/aesthetic-chair-png-5.png" alt="chair image" id="hero-img">
    <div class="hero-info">
      <p id="hero-price">£3,110.99</p>
      <h1 id="hero-title">Fahrenheit LR Set</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic at perferendis voluptatem.</p>
      <div class="radio-btn-holder">
        <label class="radio-btns">
          <input type="radio" id="pink-radio-btn" name="radio" /></label>
  
        <label class="radio-btns">
          <input type="radio" id="orange-radio-btn" name="radio" checked /></label>
  
        <label class="radio-btns">
          <input type="radio" id="blue-radio-btn" name="radio" /></label>
  
        <label class="radio-btns">
          <input type="radio" id="soft-blu-radio-btn" name="radio" checked /></label>
      </div>
      <button id="hero-btn">ADD TO CHART</button>
    </div>
  </div>
  --}}
    {{--  --}}
    @yield('content')
    @include('footer')
    <!--gsap cdn-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <!--gsap-->
  <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>