<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', [HomeController::class,'display']);
Route::get('product/{id}', [HomeController::class,'details']);
Route::view('/cart', 'cart');
Route::get('/all', [HomeController::class,'all_products']);
Route::view('/check', 'checkout');

Route::post('/save', [CheckoutController::class,'save']);

