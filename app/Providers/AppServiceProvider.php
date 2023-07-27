<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use App\Models\Currency;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        // view()->composer(['layouts.master','new-home'], function($view){
        // $currency = Currency::where('Languague',Config::get('app.locale'))->get();
        $currency_dolar = Currency::where('Languague','en')->pluck('CurrencyValue')->first();
        $currency_euro = Currency::where('Languague','fr')->pluck('CurrencyValue')->first();
        // $currency_dolar = $currency_dolar->CurrencyValue;
        //     $view->with([
        //         'currency_dolar' => $currency_dolar
        //     ]);
        // });

        view()->share('currency_dolar', $currency_dolar);
        view()->share('currency_euro', $currency_euro);
    }
}
