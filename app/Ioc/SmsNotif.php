<?php

namespace App\Ioc;

class SmsNotif
{

    public function sms($name)
    {
        return $name . ' ' . ' Wel Come';
    }

}