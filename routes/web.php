<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');


Route::get('/about', function () {
    return view('pages.about');
})->name('about');


Route::get('/deals', function () {
    return view('pages.deals');
})->name('deals');


/*
|--------------------------------------------------------------------------
| Reservation Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/reservation', [
        ReservationController::class,
        'create'
    ])->name('reservation');


    Route::post('/reservation', [
        ReservationController::class,
        'store'
    ])->name('reservation.store');

});


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [
        DashboardController::class,
        'index'
    ])->name('dashboard');

});


/*
|--------------------------------------------------------------------------
| Breeze Authentication
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';