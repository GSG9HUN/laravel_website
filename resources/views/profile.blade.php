@extends('layouts.layout')

@section('content')
    <?php
        $user='';
        ?>
    @if(auth())
        @foreach($details as $data)
            @if($data['email'] == Auth::user()['email'])
                {{$user}}={{$data}}
                @break
            @endif

        @endforeach

        <p>{{$user}}</p>
    @endif

@endsection



















































