@extends('layouts.layout')
@include('layouts.login_modal')
@section('sidebar')
    <div class="wrapper">

        <nav id="sidebar">
            <!-- Sidebar Header -->
            <div class="sidebar-header">
                <div class="dropdown show">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h3> Kategóriák</h3>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'RAM'])}}">Memóriák</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Processor'])}}">Processzorok</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Video Card'])}}">Videókártyák</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Motherboard'])}}">Alaplap</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Hard disk'])}}">Merevlemezek</a>
                    </div>
                </div>
                <div>
           <!-- Sidebar Links -->
                </div>
            </div>
        </nav>
    </div>
@endsection


@section('content')
    @include('layouts.sidebar-left')
    <div class="item-wrapper">
        @foreach($items as $item)
            <div class="item">
                <div class="img">
               <a href="{{route('shop.show',$item->name)}}">
                   <img  src="{{$item->image}}"></a>
                </div>
                <div class="product-name">
                    <a href="{{route('shop.show',$item->name)}}">{{$item->name}}</a></div>
                <div class="product-price">{{$item->presentPrice()}}</div>
                @include('add_to_cart')
            </div>
        @endforeach
    </div>
@endsection


