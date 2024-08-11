<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [FrontController::class, 'index'])->name('home');
Route::get('shirts', [FrontController::class, 'shirts'])->name('shirts');
Route::get('shirt', [FrontController::class, 'shirt'])->name('shirt');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
