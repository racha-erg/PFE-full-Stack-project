<nav class="navbar navbar-expand-xs fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span class="md-blue"><a class="navbar-brand py-0" href="{{route('products.index')}}"><img width="100"src="{{ asset('images/cuisinelogo.png') }}" ></a></span>
        </a>
        <!-- mobile links toggle -->
        <button class="navbar-toggler order-first" type="button" data-toggle="collapse" data-target="#main-links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <!-- mobile links -->
        <div class="collapse navbar-collapse" id="main-links">
                <div class="row">
                        <ul class="navbar-nav mb-3 pl-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('products.index')}}">Produits</a></li>
                            <li class="nav-item"><a class="nav-link" href="#categories_section">Catégories</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('panier.show')}}">Mon Panier</a></li>
                            <li class="nav-item"><a class="nav-link" href="#"></a></li>
                        </ul>
                </div>
        </div>
        <!-- Search box -->
        <div class="">
            <div class="input-group w-75 mx-5">
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" class="form-control form-control-sm" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sm md-blue-bg btn-outline-light" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>                
            </div>
        </div>
        <!-- user links toggle --> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#user-links" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-user-circle"></i>
        </button>
        <!-- mobile: user links -->
        <div class="collapse navbar-collapse" id="user-links">
                <ul class="navbar-nav mb-3 pl-0">
                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">S'inscrire </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Se connecter</a></li>
                    @if(auth()->check())
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class=" nav-link">Se déconnecter</a>
                        </form>
                    @endif

                </ul>
        </div>
    </div>
</nav>
