<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;


class IndexController
{
function getIndex(){
    $items=DB::table('items')->get();
    return view::make('index')->with('items',$items);
}
}
