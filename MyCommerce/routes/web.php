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

Route::group(['prefix' => 'products'], function() {
    Route::get('/all', function () {
        return view('product.product-many');
    });
    Route::get('/detail', function () {
        return view('product.product-single');
    });
    Route::get('/bycategory', function () {
        return view('product.product-many');
    });
});

Route::group(['prefix' => 'orders'], function() {
    Route::get('/addtocart', function () {
        return view('order.cart');
    });

    Route::get('/checkout', function () {
        return view('order.checkout');
    });

    Route::post('/checkout', function () {
        return view('order.checkout');
    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
