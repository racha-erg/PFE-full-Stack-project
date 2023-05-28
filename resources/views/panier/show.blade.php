<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/stylePanier.css')}}" >
  <title>Document</title>
</head>
<body>
    
<div class="container-fluid body_centent body-cart">
  @if(session('success'))
    <div class="alert alert-success my-4">
      {{session('success')}}
    </div>
  @endif
  
  
  
    <div class="wrap cf">
      <h1 class="projTitle">Responsive Table<span>-Less</span> Shopping Cart</h1>
      <div class="heading cf">
        <h1>Mon Panier</h1>
        <a href="{{route('products.index')}}" class="continue">Continue Shopping</a>
      </div>
      @if (Cart::count() > 0)
      <div class="cart">
        <ul class="cartWrap">
          @foreach (Cart::content() as $product)
          <li class="items odd">
    
            <div class="infoWrap">
              <div class="cartSection">
                <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
        
                <h3>{{$product->name}}</h3>
    
                <p> <input type="text" class="qty" placeholder="{{$product->qty}}" /> x {{$product->price}} dh</p>
    
                <p class="stockStatus"> In Stock</p>
              </div>
    
              <div class="prodTotal cartSection">
                <p>{{$product->price*$product->qty}}  dh</p>
              </div>
              <div class="cartSection removeWrap">
                <form id="remove-form-{{ $product->rowId }}" action="{{ route('panier.remove', $product->rowId) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="#" onclick="event.preventDefault(); document.getElementById('remove-form-{{ $product->rowId }}').submit();" class="remove">x</a>
                </form>
              </div>
            </div>
          </li>
          @endforeach
        </ul>
      </div>
      @else 
      <div class="alert alert-warning my-5" role="alert">votre panier vide</div>
      @endif
      <div class="promoCode"><label for="promo">Vous avez un code promotionnel ?</label><input type="text" name="promo" placholder="Enter Code" />
        <a href="#" class="btn"></a>
      </div>
      
      <div class="subtotal cf">
        <ul>
          <li class="totalRow"><span class="label">Sous-total</span><span class="value">{{Cart::subtotal()}} dh</span></li>
          <li class="totalRow"><span class="label">Tax</span><span class="value">{{Cart::tax()}} dh</span></li>
          <li class="totalRow final"><span class="label">Total</span><span class="value">{{Cart::total()}} dh</span></li>
          <li class="totalRow"><a href="{{route('payment')}}" class="btn continue">Pay avc Paypal</a></li>
        </ul>
      </div>
    </div>
  </div>
  

  </div> 
</body>
</html>
