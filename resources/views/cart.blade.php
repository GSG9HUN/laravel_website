@extends('layouts.layout')
@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">img</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
        </tr>
        </thead>
        <tbody>
    @foreach($user_items as $item)
            <tr>
                <td>
                    <div class="item">
                    <a href="{{route('shop.show',$item->name)}}">
                        <img class="card-img" src="../{{$item->image}}">
                    </a>
                    </div></td>
                <td><a href="{{route('shop.show',$item->name)}}">{{$item->name}}</a></td>
                <td>{{$item->presentPrice()}}</td>
                <td><div style="display: flex">
                    <div>{{$item->quantity}}</div>
                        <div style="margin-left: 1vh"><a href="{{route('cart.destroy',$item->id)}}"><i class="fas fa-minus"></i></a>
                        <a href=""><i class="fas fa-plus"></i></a></div>
                    </div></td>
            </tr>
    @endforeach

        </tbody>
        <tfoot>
        <th scope="col"></th>
        <th scope="col"></th>
        @if(!$user_items->isEmpty())
            <th scope="col">{{$item->getSum()}}</th>
        @else
            <th scope="col"></th>
        @endif


        <th scope="col"></th>
        </tfoot>
    </table>
@endsection
