<?php

use App\Http\Controllers\PaymentController;
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

Route::get('/paypal', function () {
    return view('paypal');
});

Route::get('/payment/paypal', [PaymentController::class, 'payWithPayPal'])->name('paypal');
Route::get('/payment/status', [PaymentController::class, 'payPalStatus']);