<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvokeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        return response('slam','201',['SHOEIB'=>'1371']);

        $names = ['ali', 'taghi', '5ali', 'arasto', 'homa'];


        return view('invoke ', compact('names'));
    }
}
