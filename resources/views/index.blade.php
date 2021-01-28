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


    @foreach($items as $item)
        <div class="name">
            {{$item->name}}
            <div class="item">
                <div class="img"><img src='{{asset("$item->image")}}' HEIGHT="400em" WIDTH="500em"/></div>
                <div class="desciprion">{{$item->description}}</div>
                <div class="price">{{$item->price}}</div>
            </div>

        </div>

    @endforeach

@endsection


