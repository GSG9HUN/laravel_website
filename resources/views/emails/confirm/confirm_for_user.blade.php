@component('mail::message')
    Dear,{{auth()->user()['username']}}!

    Your order has been processed.
    

@endcomponent
