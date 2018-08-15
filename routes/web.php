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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('facebook', function () {
    return view('facebook');
});
Route::resource('product', 'ProductController');
Route::resource('wishes', 'WishController');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
