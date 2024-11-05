<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventbookingController;
use App\Http\Controllers\ContactController;

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

// Route::resource('eventbookings', EventBookingController::class);
Route::get('/eventbookings', [EventBookingController::class, 'index'])->name('eventbookings.index');
Route::post('/eventbookings', [EventBookingController::class, 'storeBooking'])->name('eventbookings.store');
Route::post('/contacts', [EventBookingController::class, 'storeContact'])->name('contacts.store');

