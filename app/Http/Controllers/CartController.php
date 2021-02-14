<?php

namespace App\Http\Controllers;

use App\Cart;
use http\Client\Curl\User;
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


        $id=Cart::query()->select('id')->where('userid','=',$request->userid)->where('id','=',$request->id)->get();
        if($id->isEmpty()){
            Cart::add($request->userid,$request->id,$request->image,$request->name,1,$request->price,$request->description);
            return  redirect()->route('home')->with('success_message','Item was  aded to your cart!');
        }
        else{
            $quantity =Cart::query()->select('quantity')->where('id','=',$request->id)->get();
            Cart::query()->where('id','=',$request->id)->update(['quantity'=>1+$quantity[0]['quantity']]);
            return redirect()->route('shop')->with('success_message','Item quantity was updated!');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $userid
     * @return \Illuminate\Http\Response
     */
    public function show(int $userid)
    {
        return '11';
        $items= Cart::query()->where('userid','=',$userid)->get();

        return view('cart')->with('user_items',$items);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
            $quantity =Cart::query()->select('quantity')->where('id','=',$id)->get();
            Cart::query()->where('id','=',$id)->update(['quantity'=>$quantity[0]['quantity']-1]);
            $quantity =Cart::query()->select('quantity')->where('id','=',$id)->get();
            if($quantity[0]['quantity']==0){
                Cart::query()->where('id','=',$id)->delete();
            }

            return redirect()->route('cart.show',auth()->user()['id']);


    }
}
