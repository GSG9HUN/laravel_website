@extends('layouts.layout')

@section('content')
    @include('layouts.sidebar-left')
    <div class="item-wrapper">
    @foreach($items as $item)
        <div class="item">
            <div class="img">
                <a href="{{route('shop.show',$item->name)}}">
                    <img  src="../{{$item->image}}">
                </a>
            </div>




            <div class="product-name">
                <a href="{{route('shop.show',$item->name)}}">{{$item->name}}</a>
            </div>

            <div class="product-price">{{$item->presentPrice()}}</div>

            @include('add_to_cart')



        </div>


    @endforeach
    </div>
@endsection

