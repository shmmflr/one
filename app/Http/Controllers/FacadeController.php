<?php

namespace App\Http\Controllers;

use App\Facades\Payment\PaymentFacade as Payment;

class FacadeController extends Controller
{
    // public function index()
    // {
    //     try {
    //         throw new CustomException();
    //     } catch (CustomException $e) {
    //         report($e->getMessage());

    //         return false;
    //     }

    // }
    public function index()
    {
        $d = Payment::process();
        $e = Payment::warning();
        $f = Payment::danger();

        return $d . '<br>' . $e . '<br>' . $f;
    }
}