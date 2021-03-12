<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Controllers\Controller;
use App\Mail\ConfirmForUSer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ConfirmForUserController extends Controller
{

    public static function sendmail (){
        $cartItems = Cart::getItems(auth()->id());
        Mail::to(auth()->user()['email'])->send(new ConfirmForUSer($cartItems,auth()->id()));
    }
}
