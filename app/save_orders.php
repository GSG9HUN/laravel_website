<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class save_orders extends Model
{
    public static function getItems($user_id){

        return save_orders::query()->where('user_id','=',$user_id)->where('verified_by_shop','=',null)->get()->toArray();

}

    public static function insert(int $user_id, array $items){
        if(empty($items)){
            return false;
        }

        foreach ($items as $item){
            save_orders::query()->insert([
                    "user_id"=>$user_id,
                    "item_id"=>$item['id']
            ]);
        }

        return true;
    }

    public static function update_item($item,$token){
        save_orders::query()->where('item_id','=',$item['item_id'])->update([
            'verified_by_shop'=>$token
        ]);
    }
}
