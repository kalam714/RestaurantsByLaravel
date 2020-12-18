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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index',function(){
    return view('admin.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('food','App\Http\Controllers\FoodController');
Route::resource('offer','App\Http\Controllers\OfferController');
Route::resource('chef','App\Http\Controllers\ChefController');
Route::resource('slider','App\Http\Controllers\SliderController');