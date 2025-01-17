<?php

use App\Http\Controllers\pages\ExploreController;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\ProfileController;
use App\Http\Controllers\pages\TrendsController;
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

Route::get('/',     [ HomeController::class, 'index'])->name('root');
Route::get('/home', [ HomeController::class, 'index'])->name('home');

Route::get('/trends', [ TrendsController::class, 'index'])->name('trends');

Route::get('/explore', [ ExploreController::class, 'index'])->name('explore');

Route::get('/profile', [ ProfileController::class, 'index'])->name('profile');

//create new squawk
//view squawk details
//view user details
//view company details


