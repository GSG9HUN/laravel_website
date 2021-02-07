@extends('layouts.layout')

@section('content')

    @foreach($items as $item)
        <div class="item">
        <img src="../{{$item->image}}" style="max-width: 25%;height: auto" class="card-img-top" >
        <div class="product-name">{{$item->name}}</div>
        <div class="product-price">{{$item->presentPrice()}}</div>
            @include('add_to_cart')

        </div>
    @endforeach
@endsection

