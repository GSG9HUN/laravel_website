<form method="POST" action="{{route('cart.store')}}">
    @csrf
    <input type="hidden" name="id" value="{{$item->id}}">
    <input type="hidden" name="description" value="{{$item->description}}">
    <input type="hidden" name="image" value="{{$item->image}}">
    <input type="hidden" name="name" value="{{$item->name}}">
    <input type="hidden" name="price" value="{{$item->price}}">
    <input type="hidden" name="userid" value="{{auth()->id()}}">
    <button class="add-to-cart-btn">Add to cart</button>
</form>

