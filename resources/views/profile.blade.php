@extends('layouts.layout')

@section('content')
    @if(guest())
@foreach($details as $data)
    @if($data['email'] == Auth::user()['email'])
        @break
    @endif



@endforeach

<p>{{$data['email']}}</p>
    @endif

@endsection
