<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'es');

Route::group([
    'prefix' => '{language}',

], function() {
    Route::get('/', function () {
        return view('index');
    })->name('index');
    //Auth::routes();


    //  Route::get('{any}', [App\Http\Controllers\Controller::class, 'index'])->name('index');
});

Route::post('contact', [ContactController::class, 'contact'])->name('email.contact');

//app()->getLocale()


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
