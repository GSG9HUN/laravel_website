@extends('layouts.layout')

@section('content')


    <div class="">
    @foreach($items as $item)
        <a href=""><img src="{{$item->image}}" style="max-width: 25%;height: auto" class="card-img-top" ></a>
        <a href=""><div class="product-name">{{$item->name}}</div></a>
            <div class="product-price">{{$item->presentPrice()}}</div>
        @endforeach

    </div>
    <div style="height: 60px;width: 100%"></div>

@endsection
