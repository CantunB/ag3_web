<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'es')->name('main');

Route::group([
    'prefix' => '{language}',
    ], function() {

    Route::get('/', [Controller::class, 'index'])->name('index');
    Route::post('contact', [ContactController::class, 'contact'])->name('email.contact');
    Route::post('car_booking', [BookingController::class, 'car_booking'])->name('car_booking');
    //Route::post('booking', [Controller::class, 'CreateBooking'])->name('booking.create');
    Route::get('booking', [Controller::class, 'booking'])->name('booking');
    Route::view('testimonials', 'pages.testimonialss')->name('testimonials');
    Route::view('terms', 'pages.terms')->name('terms');
    Route::view('privacy', 'pages.privacy')->name('privacy');
    // Route::get('{any}', [App\Http\Controllers\Controller::class, 'index'])->name('index');
    /** PAYMENT */
    Route::group(['prefix'=>'paypal'], function(){
        Route::get('pay',[PaymentController::class, 'paypal']);
        //Route::post('/order/create',[\App\Http\Controllers\Front\PaypalPaymentController::class,'create']);
        //Route::post('/order/capture/',[\App\Http\Controllers\Front\PaypalPaymentController::class,'capture']);
    });
});
//app()->getLocale()
