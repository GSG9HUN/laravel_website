

@extends('layouts.layout')


@section('content')

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

    <div>
        <p  lang="en"><a lang="en" href="aaas/text.html">English</a></p>
        <p  lang="hu"><a lang="hu" href="aaas/text.html">Magyar</a></p>
        <p  lang="nether"><a lang="nether" href="aaas/text.html">Netherland</a></p>
    </div>
    <p lang="hu"> asdasdasda </p>
    <p lang="en"> asdasdasda </p>


    <div class="text-center">
        @foreach($items as $item)
        <a href="{{route('home')}}"><img src="{{$item->image}}" class="card-img-top" ></a>
        <a href=""><div class="product-name">{{$item->name}}</div></a>
        <div class="product-price">{{$item->presentPrice()}}</div>
        @endforeach

    </div>


@endsection


