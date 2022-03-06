<?php
// مرحله اول ساخت فساد
// مرحله بعدی در پروایدر هاست

namespace App\Facades\Payment;

class Payment
{
    public function process()
    {
        return 'this process is success';
    }
    public function danger()
    {
        return 'this process is danger';
    }
    public function warning()
    {
        return 'this process is warning';
    }

}