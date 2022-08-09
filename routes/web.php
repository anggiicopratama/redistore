<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SingleshopController;

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
    return view('index', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/cart', [CartController::class, 'cart']);

Route::get('/checkout', [CheckoutController::class, 'checkout']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/shop', [ShopController::class, 'shop']);

Route::get('/thankyou', function () {
    return view('thankyou', [
        'title' => 'Thank You',
    ]);
});

Route::get('/shop-single', [SingleshopController::class, 'singleshop']);
