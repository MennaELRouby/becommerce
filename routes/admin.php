<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('product', 'Admin\ProductController@index')->name('productlist');

    Route::get('create', 'Admin\ProductController@create')->name('createproduct');
    Route::post('create', 'Admin\ProductController@store')->name('storeproduct');
    Route::get('category', 'Admin\CategoryController@index')->name('category');
    Route::post('category', 'Admin\CategoryController@store')->name('addcategory');
    Route::get('category/{id}', 'Admin\CategoryController@show')->name('showcategory');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
