<?php

namespace App\Facades\Payment;

use Illuminate\Support\Facades\Facade;

class PaymentFacade extends Facade
{
    // مرحله سوم و شناساندن کلاس مورد نظر به فاسد خود لاراول
    // مرحله چهارم میشه در app.php و شناساندن provider به کل سیستم

    protected static function getFacadeAccessor()
    {
        return 'payment';
    }

}