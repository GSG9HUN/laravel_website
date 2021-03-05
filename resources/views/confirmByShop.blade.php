@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="header text-center">
            <h2>
                Sikeresen rögzítetted egy rendelés feldolgozását!
            </h2>
        </div>
        <div class="body">
            <div class="text-center">
                5 másodperc múlva kilép az oldal.
            </div>
        </div>
    </div>


    <script>

        window.onload= function () {
            setTimeout(window.close, 5000)
        }
    </script>
@endsection
