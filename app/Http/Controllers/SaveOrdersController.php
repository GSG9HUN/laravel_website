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
            //email küldés h sikeresen leadta a rendelést
            $itemis=Cart::delete_items($user_id);
            return $itemis;
        }

        return view('unsuccess');
    }
}
