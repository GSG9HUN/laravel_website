<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
public function presentPrice(){


        $value = new \NumberFormatter("hu-HU",\NumberFormatter::DECIMAL);

    return $value->format($this->price);
}
}
