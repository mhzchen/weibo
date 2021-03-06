<?php

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

Route::namespace('home')->group(function(){
    Route::get('/','StaticPagesController@index');
    Route::get('/help','StaticPagesController@help');
    Route::get('/about','StaticPagesController@about');

    Route::resource('users','UserController');
});
