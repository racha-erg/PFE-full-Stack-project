
@extends('layouts.master')

@section('ShowProducts')
    @if ($results->count() > 0)
    <div class="displaybox bodyPro">
    @foreach ($results as $product)
    <a href="{{ route('products.show', $product->id) }}">
        <div class="roll">
            <div class="dis dis6" style="background: url({{ $product->image1 }}) no-repeat center center;background-size: 100%;background-color: white;">
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
    @else
    <div class="displaybox bodyPro">
    <div class="container body_centent">
        <div class="alert alert-warning" role="alert">
            Aucun résultat trouvé <a href="{{route('products.index')}}">Voir tous les produit</a>
        </div>
    </div>
    </div>
    @endif
@endsection