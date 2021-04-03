@extends('layouts.layout')
@include('layouts.login_modal')
@section('content')
@if(!$user_items->isEmpty())
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
                            <img id="{{$item->id}}" class="card-img" src="../../{{$item->image}}">

                        </a>
                    </div>
                </td>
                <td><a href="{{route('shop.show',$item->name)}}">{{$item->name}}</a></td>
                <td>{{$item->presentPrice() }}Ft</td>
                <td>
                    <div style="display: flex">
                        <div>{{$item->quantity}}</div>
                        <div style="margin-left: 1vh">
                            <div>
                                <form id="{{$item->id}}destroy" method="get" action="{{route('cart.index',[$item->id,"destroy"])}}">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="id">
                                </form>
                                <a onclick="document.getElementById('{{$item->id}}destroy').submit()"><i class="fas fa-minus"></i></a>

                            </div>
                            <div>
                                <form id="{{$item->id}}add" method="get" action="{{route('cart.index',[$item->id,"add"])}}">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="id">
                                </form>
                                <a onclick="document.getElementById('{{$item->id}}add').submit()"
                                ><i class="fas fa-plus"></i></a>
                            </div>

                            <div>
                                <form id="{{$item->id}}remove" method="get" action="{{route('cart.index',[$item->id,"remove"])}}">
                                    @csrf
                                    <input type="hidden" value="{{$item->id}}" name="id">
                                </form>
                                <a  onclick="document.getElementById('{{$item->id}}remove').submit()"
                                ><i  class="fas fa-times-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <th scope="col"></th>
        <th scope="col"></th>
        @if(!$user_items->isEmpty())
            <th scope="col">{{$item->getSum()}}Ft</th>
        @else
            <th scope="col"></th>
        @endif


        <th scope="col"></th>
        </tfoot>
    </table>
    <form action="{{route('purchase')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$user_id}}">
        <div class="purchase">
            <button type="submit" class=" btn btn-success text-center">Purchase</button>
        </div>

    </form>

@else
    <div class="text-center">
        <div class="text-danger">
            A kosarad üres, előbb termékeket kell, hozzá adj, hogy megtudd nézni mi van a kosaradban!
        </div>
        <a href="{{route('home')}}">Klikkelj ide, hogy visszatérj a Webshophoz!</a>
    </div>
@endif


@endsection
