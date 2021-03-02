@extends('layouts.layout')

@section('content')
<div class="text-center">
    <div class="text-danger">
        Error 404
    </div>
    <span>
        <div>
            A keresett oldal vagy nem található vagy át lett helyezve másik címre.
        </div>
    </span>

    <div>
        <p>
            5 másodperc múlva átírányítünk a
            <span> <a href="{{route('home')}}">kezdő oldalra</a>.</span>
        </p>
    </div>
</div>
<script>
    window.onload = function (){
        setTimeout(function(){ window.location.href = "/" }, 5000);
    }
</script>';
@endsection
