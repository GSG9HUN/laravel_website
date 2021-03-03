<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public function presentPrice(){
        $value = new \NumberFormatter("hu-HU",\NumberFormatter::DECIMAL);

        return $value->format($this->price);
    }

    public function getSum(){
        $results = Cart::query()->select('quantity','price')->get();
        $sum = array();
        foreach ($results as $value){
                $multiply = $value['price']* $value['quantity'];
                array_push($sum,$multiply);
            }

        $value = new \NumberFormatter("hu-HU",\NumberFormatter::DECIMAL);
        return $value->format(array_sum($sum));
    }

    public static function getItems(int $user_id){
        return Cart::query()->where('userid','=',$user_id)->get()->toArray();
    }

    public static function delete_items(int $user_id)
    {
        $item_id = Cart::query()->select('id')->where('userid','=', $user_id)->get();

        foreach ($item_id as $id){
            Cart::query()->where('id', '=', $id['id'])->where('userid','=',$user_id)->delete();
        }
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
