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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('scheduled_flights', 'ScheduledFlightController')->middleware('can:view,App\Airport');
Route::resource('tickets', 'TicketController');

Route::resource('bookings', 'BookingController');
Route::resource('payments', 'PaymentController');

Route::resource('loyalty_types', 'LoyaltyTypeController');
Route::get('loyalty_profiles/get_my_profile', 'LoyaltyProfileController@get_my_profile');
Route::resource('loyalty_profiles', 'LoyaltyProfileController');
