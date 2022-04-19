<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\test;

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

Route::get('/', [HomeController::class, 'display']);

Route::get('product/{id}', [HomeController::class, 'details']);


Route::view('/cart', 'cart');
Route::get('/all', [HomeController::class, 'all_products']);
Route::view('check', 'checkout');

Route::get('/check/{id}',  [CheckoutController::class, 'display']);

// Route::post('/save', [PaymentController::class, 'save']);

// for Initiate the order
Route::post('/payment-initiate-request',[PaymentController::class,'Initiate']);

// for Payment complete
Route::post('/payment-complete',[PaymentController::class,'Complete']);

Route::view('/thankyou/{id}', 'thankyou');

Route::view('new_inspector', 'new_inspector');
Route::post('add_inspector', [InspectorController::class,'new_application']);


Route::view('/contact','contact');
Route::post('/contact',[ContactController::class,'index']);

Route::get('/welcome', [test::class,'index']);


