<?php

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


Route::get('/shop','ShopController@index')->name('shop.index');

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/profile','UserController@index')->middleware('verified')->name('profile');

Route::get('/home', 'IndexController@index')->name('home');


