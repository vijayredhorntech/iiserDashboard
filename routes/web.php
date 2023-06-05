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



        Route::get('/',[LayoutController::class,'dashboard'])->name('dashboardPage');
        Route::get('/admin',[LayoutController::class,'admin'])->name('adminPage');
        Route::get('/subAdmin',[LayoutController::class,'subAdmin'])->name('subAdminPage');
        Route::get('/vendorDashboard',[LayoutController::class,'vendorDashboard'])->name('vendorDashboardPage');
        Route::get('/workFlow',[LayoutController::class,'workFlow'])->name('workFlow');


