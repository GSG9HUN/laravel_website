<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $words =explode(" ",$request->search);
        $guery = array();
        foreach ($words as $word)
            array_push($guery, Item::inRandomOrder()
                ->where('name','like','%'.$word.'%')->get());
        return view("search")->with('request',$guery);
    }


    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request['order_1']=="on"){
            $items = Item::query()->where('price','<=',intval($request['max_value']))
                ->orderByDesc('price')->get();
        }elseif($request['order_2']=="on"){
            $items = Item::query()->where('price','<=',intval($request['max_value']))
                ->orderBy('price')->get();
        }
        elseif($request['order_3']=="on"){
            $items = Item::query()->where('price','<=',intval($request['max_value']))
                ->orderByDesc('name')->get();
        }else{
            $items = Item::query()->where('price','<=',intval($request['max_value']))
                ->orderBy('name')->get();
        }
        return view('category')->with('items',$items);
    }

}
