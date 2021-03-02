<?php

use App\Mail\WelcomeMail;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',"IndexController@Index" );

/*Route::get('/users',function (){
    return View::make("index");
});*/


Route::get('/shop','IndexController@index')->middleware('verified')->name('shop');

Route::get('/shop/{name}','ShopController@show')->middleware('verified')->name('shop.show');
Route::post('/cart/{userid}','CartController@show')->middleware('verified')->name('cart.show');
Route::get('/cart/{id}/{param}','CartController@index')->middleware('verified')->name('cart.index');
Route::post('/cart','CartController@store')->middleware('verified')->name('cart.store');
//Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::post("/search","SearchController@index")->name("search.index");
Route::get("/search/{category}","CategorySearchController@show")->name("categorysearch.show");

Route::Post("/search/order",'SearchController@show')->name('detailed.search');

Route::get( "/profile/{id}",'UserDetailsController@update')->name('save');

Route::post( "/confirm/{id}",'SaveOrdersController@index')->name('confirm');

Route::get('/profile','UserController@index')->middleware('verified')->name('profile');

Route::get('/home', 'IndexController@index')->middleware('verified')->name('home');

Route::post("/purchase",function (){
    $items = \App\Cart::query()->where('userid','=',\auth()->id())->get();
    $user_details = UserDetails::query()->where('id','=',\auth()->id())->firstOrFail();
    return view('purchase')->with(["items"=>$items,"user_details"=>$user_details]);
})->middleware('verified')->name('purchase');


