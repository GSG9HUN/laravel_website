<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class save_orders extends Model
{

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
}
