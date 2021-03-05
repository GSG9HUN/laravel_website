<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\ConfirmOrderByShop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ConfirmOrderByShopController extends Controller
{

   public static function sendmail (){
       $cartItems = Cart::getItems(auth()->id());
       Mail::to("ssgamingwotteam@gmail.com")->send(new ConfirmOrderByShop($cartItems));
   }
}