<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function index()
    {
        $subs = Subscription::all();
        return view('product-price-exp', compact('subs'));
    }

    public function store(Request $request)
    {
        $dataArray = [
            'product' => $request->get('product'),
            'price' => $request->get('price'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        $id = Subscription::insertGetId($dataArray);
        $subscription = Subscription::find($id);

        if ($request->get('exp-day')) {
            $exp = $subscription->expires_at = now()->addDays($request->get('exp-day'));
        } else if ($request->get('exp-hour')) {
            $hour = $request->get('exp-hour');
            $exp = $subscription->expires_at = now()->addHour($hour);
        }
        $subscription->update(['expires_at' => $exp]);
        return redirect()->back();
    }

    public function edit(Subscription $subscription)
    {
        return view('product-price-exp-edit', compact('subscription'));
    }


    public function update(Request $request, Subscription $subscription)
    {
        $exp_at = $subscription->expires_at = now()->addRealDays(12);
        $price = $request->get('price');
        $subscription->update([
            'price' => $price,
            'expires_at' => $exp_at
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
