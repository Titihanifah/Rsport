<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	if(Auth::guest()) {
		return view('welcome');
	}
	return Redirect::to('home');
});
Auth::routes();
// Route::get('/titijahat', function () {
//     return view('balance.create');
// });
Route::get('/balance/confirm', function () {
    return view('balance.confirm');
});


Route::get('/home', 'HomeController@index');

// Route::resource('/booking','BookingController');
Route::resource('balance','BalanceController');
Route::resource('paymentconfirmation','PaymentConfirmationController');
