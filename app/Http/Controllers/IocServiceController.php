<?php

namespace App\Http\Controllers;

use App\Interface\Animals;
use App\Ioc\DbConnection;

class IocServiceController extends Controller
{

    // به این نوع تزریق وابستگی می گویند  resolve
    //یعنی فراهم کردن وابستگی
    // در روش پایین میشه بصورت خوردکار
    // Request $request

    public function index(DbConnection $connection, Animals $animals)
    {
        //     // $dd = app()->make(Qlp::class);
        //     //For Classes
        $message = app()->make('notif')->sms('Shoeib');

        //     // For Interface oop

        $dd = $connection->create();
        $ss = $animals->animalSound('haaaaaaaap hap');
        $tt = $animals->animalsType('Dog Type');

        dd($message, $dd, $ss, $tt);
    }

}