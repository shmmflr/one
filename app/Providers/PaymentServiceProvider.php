<?php

namespace App\Providers;

use App\Facades\Payment\Payment;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // مرحله دوم ساخت فساد
        // مرحله سوم میشه خود تابع فساد
        app()->singleton('payment', function () {
            return new Payment;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}