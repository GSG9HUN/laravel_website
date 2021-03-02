<?php

namespace App\Http\Controllers;

use App\Cart;
use App\save_orders;
use Illuminate\Http\Request;

class SaveOrdersController extends Controller
{
    public function index(int $user_id){

        $items = Cart::getitems($user_id);

        if(save_orders::insert($user_id,$items)){

            return view('/');
        }

        return view('unsuccess');
    }
}
