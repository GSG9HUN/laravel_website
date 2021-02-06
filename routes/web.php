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


Route::get('/shop','IndexController@index')->middleware('verified');

Route::get('/shop/{name}','ShopController@show')->middleware('verified')->name('shop.show');
Route::get('/cart','CartController@show')->name('cart.show');
//Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::post("/search","SearchController@index")->name("search.index");
Route::get("/search/{category}","CategorySearchController@show")->name("categorysearch.show");

Route::get( "/profile/{id}",'UserDetailsController@update')->name('save');

Route::get('/profile','UserController@index')->middleware('verified')->name('profile');

Route::get('/home', 'IndexController@index')->middleware('verified')->name('home');


