<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    // Route::get('/', function () {
    //     return view('admin.index');
    // })->name('admin.index');
    Route::get('/', 'Admin\ProductController@index')->name('admin.index');

    Route::get('create', 'Admin\ProductController@create')->name('createproduct');
    Route::post('create', 'Admin\ProductController@store')->name('storeproduct');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
