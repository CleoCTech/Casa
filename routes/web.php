<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'PagesController@shop')->name('shop');
Route::get('/collections', 'PagesController@collections')->name('collections');
Route::get('/jewerlytips', 'PagesController@jewerlytips')->name('jewerly-tips');
Route::get('/about', 'PagesController@about')->name('about-casa');
Route::get('/durability', 'PagesController@durability')->name('durability');
Route::get('/contact', 'PagesController@contact')->name('contact');