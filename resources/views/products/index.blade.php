@extends('layouts.master')

@section('ShowProducts')   
          <div class="displaybox bodyPro">
            @foreach ($products as $product)
            <a href="{{ route('products.show', $product->id) }}">
            <div class="roll">
              <div class="dis dis6" style="background: url({{ $product->image1 }}) no-repeat center center;
              background-size: 100%;
              background-color: white;">
                <div class="distopwrap">
                  <div class="dislogo dislogo1">
                  </div>
                  <div class="disdis product-name">
                    <strong>{{ $product->name }}</strong>
                  </div>
                </div>
                <div class="disprice">
                  {{ $product->price }} DH
                </div>
                <button class="disbut"><i class="fa fa-shopping-cart faspace"></i> ADD TO CART</button>
              </div>
            </div>
          </a>
            @endforeach  
          </div>
          {{-- code paginate--}}
          <div class="container text-center">
            <div class="row">
              <div class="col-md-4 ml-3">
                {!! $products->links() !!}
              </div>
            </div>
          </div>
          
@endsection
