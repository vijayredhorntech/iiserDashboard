<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

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



        Route::get('/',[LayoutController::class,'flightBooking'])->name('flightBookingPage');
        Route::get('/admin',[LayoutController::class,'invoices'])->name('invoicesPage');
        Route::get('/subAdmin',[LayoutController::class,'clients'])->name('clientsPage');
        Route::get('/vendorDashboard',[LayoutController::class,'settings'])->name('settingPage');
        Route::get('/workFlow',[LayoutController::class,'workFlow'])->name('workFlow');


