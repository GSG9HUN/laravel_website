@extends('layouts.layout')

@section('content')


    <div class="">

        <img src="../{{$item->image}}" style="max-width: 25%;height: auto" class="card-img-top" >
        <div class="product-name">{{$item->name}}</div>
        <div class="product-price">{{$item->presentPrice()}}</div>
        @include('add_to_cart')

    </div>

@endsection
