@component('mail::message')
Order By : {{auth()->user()['username']}}


@component('mail::table')
    | Name          | Price    |
    |:-------------:| --------:|
    @foreach($items as $item)
    | {{$item["name"]}} | {{$item['price']}} Ft |
    @endforeach

@endcomponent


@component('mail::button', ['url' => '','color'=>'primary'])
    <a href="{{route('confirmByShop',["user_id"=>auth()->id(),"token"=>sha1(time()),serialize($items)])}}"> Order processing</a>
@endcomponent

@endcomponent
