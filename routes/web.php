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

Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('/reservation', function () {
    return view('frontend.layouts.reservation');
})->name('reservation');
Route::get('/admin/index',function(){
    return view('admin.index');
});

//food section
Route::get('/getFood','App\Http\Controllers\FrontendController@getFood')->name('get.food');
Route::get('/search-food','App\Http\Controllers\FrontendController@getFood')->name('search.food');
Route::get('/viewSingleFood/{id}','App\Http\Controllers\FrontendController@singleFood')->name('single.food');
Route::get('/food/offer','App\Http\Controllers\FrontendController@getOfferFood')->name('offer.food');

//reservation
Route::get('/reservation','App\Http\Controllers\ReservationController@reservation')->name('reservation');
Route::post('/submitReservation','App\Http\Controllers\ReservationController@submitReservation')->name('submit.reservation');

Route::get('our-chefs','App\Http\Controllers\FrontendController@ourChefs')->name('our.chefs');

//order 
Route::get('order/{id}','App\Http\Controllers\OrderController@order')->name('order');
Route::get('offer/order/{id}','App\Http\Controllers\OrderController@offerOrder')->name('offer.order');
Route::post('/submitOrder','App\Http\Controllers\OrderController@OrderSubmit')->name('submit.order');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('food','App\Http\Controllers\FoodController');
Route::resource('offer','App\Http\Controllers\OfferController');
Route::resource('chef','App\Http\Controllers\ChefController');
Route::resource('slider','App\Http\Controllers\SliderController');
Route::get('getReservationAdminSection','App\Http\Controllers\ReservationController@getReservation')->name('admin.reservation');
Route::delete('destroyReservation/{id}','App\Http\Controllers\ReservationController@destroy')->name('reservation.destroy');
Route::get('getOrderAdminSection','App\Http\Controllers\OrderController@getOrder')->name('admin.order');
Route::delete('destroyOrder/{id}','App\Http\Controllers\OrderController@destroy')->name('order.destroy');