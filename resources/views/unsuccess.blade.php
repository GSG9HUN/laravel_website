@extends('layouts.layout')
@section('content')
        <div class="text-info text-center">
            A rendelésed nem sikerült rögzíeni kérlek próbáld újra később.
        </div>
            <div class="text-center">
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
