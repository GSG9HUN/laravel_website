@extends('layouts.layout')

@section('content')


    <div class="">

        <img src="../{{$product->image}}" style="max-width: 25%;height: auto" class="card-img-top" >
        <div class="product-name">{{$product->name}}</div>
        <div class="product-price">{{$product->presentPrice()}}</div>
        <button class="add-to-cart-btn">Add to cart</button>
    </div>

@endsection
