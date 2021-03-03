<?php

namespace App\Http\Controllers;

use App\Cart;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param int $id
     * @param String $value
     * @return \Illuminate\Http\Response
     */
    public function index(int $id, String $value)
    {
        if($value=="add"){
            return $this->add($id);
        }else if($value=="destroy"){
            return $this->destroy($id);
        }else{
            return $this->remove($id);
        }
    }

    public function remove($id){

        Cart::query()->where('id','=',$id)->delete();
        $items= Cart::query()->where('userid','=',auth()->id())->get();
        return view('cart')->with(['user_items'=>$items,"user_id"=>auth()->id()]);
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
        else {
            $quantity =Cart::query()->select('quantity')->where('id','=',$request->id)->get();
            Cart::query()->where('id','=',$request->id)->update(['quantity'=>1+$quantity[0]['quantity']]);
            return redirect()->route('shop')->with('success_message','Item quantity was updated!');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $userid
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show(int $userid)
    {
        $items= Cart::query()->where('userid','=',$userid)->get();

        return view('cart')->with(['user_items'=>$items,"user_id"=>$userid]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function destroy(int $id)
    {

            $quantity =Cart::query()->select('quantity')->where('id','=',$id)->get();
            $value =  $quantity[0]['quantity'];
            Cart::query()->where('id','=',$id)->update(['quantity'=>$value-1]);
            $quantity =Cart::query()->select('quantity')->where('id','=',$id)->get();
            if($quantity[0]['quantity']==0){
                Cart::query()->where('id','=',$id)->where('userid','=',auth()->id())->delete();
            }
            $items= Cart::query()->where('userid','=',auth()->id())->get();
            return view('cart')->with(['user_items'=>$items,"user_id"=>auth()->id()]);


    }

    public function add(int $id){
        $quantity =Cart::query()->select('quantity')->where('id','=',$id)->get();
        $value =  $quantity[0]['quantity'];
        Cart::query()->where('id','=',$id)->update(['quantity'=>$value+1]);
        $items= Cart::query()->where('userid','=',auth()->id())->get();
        return  $this->show(auth()->id());
        return view('cart')->with(['user_items'=>$items,"user_id"=>auth()->id()]);
    }

}
