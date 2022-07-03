<?php

use App\Http\Controllers\ProductListingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductListingController::class,'showListingPage'])->name('list');

Route::get('/load-more-products', [ProductListingController::class,'loadMoreProducts'])->name('list.load_more_products');
