<form method="POST" action="{{route('cart.store')}}">
    @csrf
    <input class="d-none" type="hidden" name="id" value="{{$item->id}}">
    <input class="d-none"  type="hidden" name="description" value="{{$item->description}}">
    <input class="d-none"  type="hidden" name="image" value="{{$item->image}}">
    <input class="d-none"  type="hidden" name="name" value="{{$item->name}}">
    <input class="d-none"  type="hidden" name="price" value="{{$item->price}}">
    <input  class="d-none" type="hidden" name="userid" value="{{auth()->id()}}">
    <button type="submit" class="add-to-cart-btn">Add to cart</button>
</form>

