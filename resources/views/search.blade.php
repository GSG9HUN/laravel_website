@extends("layouts.layout")

@section('content')

        @foreach($request as $result)

            @foreach($result as $item)
                <img src="{{$item->image}}" style="max-width: 25%;height: auto" class="card-img-top" >
               <div class="product-name">{{$item->name}}</div>
               <div class="product-price">{{$item->presentPrice()}}</div>
                <button class="add-to-cart-btn">Add to cart</button>
            @endforeach

        @endforeach

@endsection
