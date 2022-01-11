<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'es')->name('main');

Route::group([
    'prefix' => '{language}',
    ], function() {

    Route::get('pdf', [BookingController::class, 'createPDF'])->name('pdf');

    Route::get('/', [Controller::class, 'index'])->name('index');



    Route::post('contact', [ContactController::class, 'contact'])->name('contact');
    Route::view('testimonials', 'pages.testimonialss')->name('testimonials');
    Route::view('terms', 'pages.terms')->name('terms');
    Route::view('privacy', 'pages.privacy')->name('privacy');
    // Route::get('{any}', [App\Http\Controllers\Controller::class, 'index'])->name('index');
    /** PAYMENT */
    //Route::group(['prefix'=>'paypal'], function(){
      //  Route::get('pay',[PaymentController::class, 'paypal']);
        //Route::post('/order/create',[\App\Http\Controllers\Front\PaypalPaymentController::class,'create']);
        //Route::post('/order/capture/',[\App\Http\Controllers\Front\PaypalPaymentController::class,'capture']);
   // });
    Route::group(['prefix' => 'booking'], function(){
        Route::post('quotes', [BookingController::class, 'quotes'])->name('quotes');
        Route::post('vehicles', [BookingController::class, 'vehicles'])->name('vehicles');
        Route::post('complete', [BookingController::class, 'complete'])->name('complete');
        Route::post('payment', [BookingController::class, 'payment'])->name('payment');
        Route::group(['prefix' => 'pdf'], function() {
            Route::get('voucher', [BookingController::class, 'voucher'])->name('voucher');
        });
    });

    //Route::get('dependent-dropdown', [CountryStateCityController::class, 'index']);
    Route::post('getState', [CountryStateCityController::class, 'getState'])->name('fetchState');
    Route::post('getCity', [CountryStateCityController::class, 'getCity'])->name('fetchCities');
});
//app()->getLocale()
