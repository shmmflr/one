<?php

namespace App\Http\Controllers;

use App\Models\rate;
use Facade\FlareClient\View;

class RateController extends Controller
{
    public function index()
    {

        $rate = rate::find(25);
        dd($rate->rateable);
        return view('rateing');
    }
}