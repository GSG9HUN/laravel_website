@extends('layouts.layout')
@section('content')
    <div class="text-info text-center">
        {{$name}} rendelése sikeresen feldolgozva!
    </div>
    <div class="text-center">
        <p>
            5 másodperc múlva az ablak autómatikusan bezáródik.
        </p>
    </div>
    </div>
    <script>
        window.onload = function (){
            setTimeout(function(){ window.close() }, 5000);
        }
    </script>';
@endsection
