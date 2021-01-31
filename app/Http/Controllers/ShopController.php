<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $items = Item::all();

        return view('shop')->with('items',$items);
    }



    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($name)
    {
        $product = Item::where('name',$name)->firstOrFail();

        return view('shop')->with('product',$product);
    }

}
