<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\LoginRegister;

Route::get('/', function () {
    return view('welcome')->name('home_page');
});

Route::get('/signin', [LoginRegister::class,'signin']);


Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'dashboardMain'])->name('dashboard');
Route::get('/insert_price', [\App\Http\Controllers\DashboardController::class,'insert_price'])->name('insert_price');
Route::get('/update_price', [\App\Http\Controllers\DashboardController::class,'update_price'])->name('update_price');
Route::post('/update_price_process', [\App\Http\Controllers\DashboardController::class,'update_price_process'])->name('update_price_process');
