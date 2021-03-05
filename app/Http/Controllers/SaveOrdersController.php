<?php

namespace App\Http\Controllers;

use App\Cart;
use App\save_orders;
use Illuminate\Http\Request;

class SaveOrdersController extends Controller
{

    public function verify($user_id,$token,array $item_ids){
        return $item_ids;
    }

    public function index(int $user_id){

        $items = Cart::getitems($user_id);

        if(save_orders::insert($user_id,$items)){
            ConfirmOrderByShopController::sendmail();
            $itemis=Cart::delete_items($user_id);
            return "elment az email";
        }

        return view('unsuccess');
    }
}
