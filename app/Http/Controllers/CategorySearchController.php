<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class CategorySearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $category
     * @return \Illuminate\Http\Response
     */
    public function show(string $category)
    {
        $products = Item::inRandomOrder()->where('category','=',$category)->get();

        return view('category')->with('items',$products);
    }

}
