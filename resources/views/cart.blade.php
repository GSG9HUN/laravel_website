@extends('layouts.layout')
@section('content')
    @foreach($user_items as $item)
        <div class="item">
            <a href="{{route('shop.show',$item->name)}}">
                <img  src="../{{$item->image}}">
            </a>


            <div class="product-name">
                <a href="{{route('shop.show',$item->name)}}">{{$item->name}}</a>
            </div>

            <div class="product-price">{{$item->presentPrice()}}</div>
            <div class="product-quantity">{{$item->quantity}}</div>
            <div class="product-description">{{$item->description}}</div>

        </div>
    @endforeach
@endsection
