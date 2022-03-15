<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductaddController;

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
    return view('home');
});
//Package list
Route::get('package-list', [ProductaddController::class, 'packageList']);
// Add Package
Route::get('add-product', [ProductaddController::class, 'addPackageView']);
Route::post('add-product', [ProductaddController::class, 'addPackage']);
//Edit Package
Route::get('package-edit/{id}', [ProductaddController::class, 'editPackage']);
Route::put('update-product/{id}', [ProductaddController::class, 'updatePackage']);
//delete Package
Route::get('package-delete/{id}', [ProductaddController::class, 'deletePackage']);
