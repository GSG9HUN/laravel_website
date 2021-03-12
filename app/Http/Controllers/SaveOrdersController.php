<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\Mail\ConfirmForUSer;
use App\Mail\ConfirmOrderByShop;
use App\save_orders;

class SaveOrdersController extends Controller
{

    public function verify($user){
        $items = save_orders::getItems($user);
        if(empty($items)){
            return false;
        }
        foreach ($items as $item){
            $verify_token=date ("Y-m-d H:i:s");
            save_orders::update_item($item,$verify_token);
        }
        ConfirmForUserController::sendmail();
        return view('success_confirm_by_shop')->with("name",auth()->user()['username']);
    }

    public function index(int $user_id){

        $items = Cart::getitems($user_id);

        if(save_orders::insert($user_id,$items)){
            ConfirmOrderByShopController::sendmail();
            Cart::delete_items($user_id);
            return redirect()->route('home');
        }

        return view('unsuccess');
    }
}
