

@extends('layouts.layout')

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
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'SUV'])}}">Memóriák</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'KOMBI'])}}">Processzorok</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Off road'])}}">Videókártyák</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Sport'])}}">Gépházak</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Szuperautó'])}}">Perifériák</a>
                        <a class="dropdown-item" href="{{route('categorysearch.show',['category'=>'Teherautó'])}}">Merevlemezek</a>eeeeeeeeeeeeeeeee
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

    {{--<div>
        <p  lang="en"><a lang="en" href="aaas/text.html">English</a></p>
        <p  lang="hu"><a lang="hu" href="aaas/text.html">Magyar</a></p>
        <p  lang="nether"><a lang="nether" href="aaas/text.html">Netherland</a></p>
    </div>

    <div>
        <p  lang="en"><a lang="en" href="aaas/text.html">English</a></p>
        <p  lang="hu"><a lang="hu" href="aaas/text.html">Magyar</a></p>
        <p  lang="nether"><a lang="nether" href="aaas/text.html">Netherland</a></p>
    </div>

    <div>
        <p  lang="en"><a lang="en" href="aaas/text.html">English</a></p>
        <p  lang="hu"><a lang="hu" href="aaas/text.html">Magyar</a></p>
        <p  lang="nether"><a lang="nether" href="aaas/text.html">Netherland</a></p>
    </div>
    <p lang="hu"> asdasdasda </p>
    <p lang="en"> asdasdasda </p>
--}}

    @include('layouts.sidebar-left')
    <div class="item-wrapper">
        @foreach($items as $item)
            <div class="item">
                <div class="img">
               <a href="{{route('shop.show',$item->name)}}">
                        <img  src="{{$item->image}}">
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


