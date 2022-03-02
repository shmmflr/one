<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index()
    {
        // Cache::store('file')->put('key', 'this is a test', 1);

        // dd(Cache::store('file')->get('key'));

        // cache(['key' => 'value2'], 1);
        $post = post::find(1);

        // Cache::put('post_1', $post, now()->addSecond(10));
        dd(test('shoeib'));
        dd(cache('post_1'));
    }
}