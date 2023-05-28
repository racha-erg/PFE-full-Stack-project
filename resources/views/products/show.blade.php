<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style2.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>CuisineMall detail</title>
</head>
<body>
    <div class = "card-wrapper">
        <div class = "card">
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src="{{ $product->image1 }}" alt = "image1">
                <img src="{{ $product->image2 }}" alt = "image2" >
                <img src="{{ $product->image3 }}" alt = "image3">
                <img src="{{ $product->image4 }}" alt = "image4">
              </div>
            </div>
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src="{{ $product->image1 }}" style="width:120px" alt = "product image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                    <img src="{{ $product->image2 }}" style="width:120px" alt = "product image">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                    <img src="{{ $product->image3 }}" style="width:120px" alt = "product image">                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                    <img src="{{ $product->image4 }}" style="width:120px" alt = "product image">                </a>
              </div>
            </div>
          </div>
          <!-- card right -->
          <div class = "product-content">
            <h5 class = "product-title">{{ $product->name }}</h5>
            <a href = "{{route('products.index')}}" class = "product-link">visiter la boutique </a>
            <div class = "product-rating">
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star-half-alt"></i>
              <span>4.7(21)</span>
            </div>
      
            <div class = "product-price">
              <p class = "last-price">Ancien prix: <span>{{ $product->price + $product->price*0.25}} </span></p>
              <p class = "new-price">Nouveau prix: <span>{{ $product->price }} dh</span></p>
            </div>
      
            <div class = "product-detail">
              <h2>À propos de cet article: </h2>
              <p>{{ $product->description }}</p>
              <ul>
                <li>Quantité restante: <span>{{ $product->quantity }}</span></li>
                <li>Disponible: <span>en stock</span></li>
                <li>Category: <span>Petits électroménager de cuisine</span></li>
                <li>Zone de livraison : <span>Partout dans le monde</span></li>
                <li>Frais d'expédition: <span>Gratuit</span></li>
              </ul>
            </div>
      
            <div class = "purchase-info">
                <form method="POST" action="{{ route('panier.add', $product->id) }}" class="my-5">
                    @csrf
                    <div class="d-flex justify-content-center">
                      <input type="hidden" name="id" value="{{$product->id}}">
                      <input type="hidden" name="name" value="{{$product->name}}">
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <input type="hidden" name="price" value="{{$product->image}}">
                      <input type = "number" min = "1" max='{{$product->quantity}}' name="quantity" id="quantity" value = "1">
                         <button type="submit" class="btn">Ajouter au panier </button>
                    </div>
                  </form>
            </div>
      
            <div class = "social-links">
              <p>Partager sur: </p>
              <a href = "#">
                <i class = "fab fa-facebook-f"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-twitter"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-instagram"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-whatsapp"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </div>
    </div>
    <script src="{{ asset('js/scriptRegister.js') }}"></script>
</body>
</html>