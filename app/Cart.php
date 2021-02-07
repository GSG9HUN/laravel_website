<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public function presentPrice(){
        $value = new \NumberFormatter("hu-HU",\NumberFormatter::DECIMAL);

        return $value->format($this->price);
    }

    public static function add($userid,$id, $image, $name,  $quantity,  $price ,$description)
    {


    $value = $price * $quantity;


        Cart::query()->insert([
            'userid'=>$userid,
            "id"=>$id,
            "image"=>$image,
            "name"=>$name,
            "quantity"=>$quantity,
            "price"=>$value,
            "description"=>$description

            ]);


    }
}
