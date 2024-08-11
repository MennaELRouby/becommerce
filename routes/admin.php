<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('addproduct', 'Admin\ProductController@index')->name('addproduct');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
