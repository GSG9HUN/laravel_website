<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=Cart::query()->select('id')->where('id','=',$request->id)->get();
        if(intval($request->id)==intval($id[0]['id'])){
            $quantity =Cart::query()->select('quantity')->where('id','=',$request->id)->get();
            Cart::query()->where('id','=',$request->id)->update(['quantity'=>1+$quantity[0]['quantity']]);
        }else{
            Cart::add($request->userid,$request->id,$request->image,$request->name,1,$request->price,$request->description);

            return redirect()->route('cart.show',$request->userid)->with('success_message','Item was added to your cart!');

        }

            return redirect()->route('cart.show',$request->userid)->with('success_message','Item quantity was updated !');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userid)
    {
        $items= Cart::query()->where('userid','=',$userid)->get();
        return view('cart')->with('user_items',$items);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
