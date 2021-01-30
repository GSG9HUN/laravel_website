<?php

namespace App\Http\Controllers;

use App\Item;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::inRandomOrder()->get();

        return view('index')->with('items',$items);
    }

}
