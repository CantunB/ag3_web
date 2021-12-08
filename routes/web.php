<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'es');

Route::group([
    'prefix' => '{language}',
], function() {
    Route::get('/', function () {
        return view('layouts.master');
    })->name('index');
    //Auth::routes();
    Route::post('contact', [ContactController::class, 'contact'])->name('email.contact');
    Route::get('reservation', [Controller::class, 'reservation'])->name('reservation');
    // Route::get('{any}', [App\Http\Controllers\Controller::class, 'index'])->name('index');
});


//app()->getLocale()


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
