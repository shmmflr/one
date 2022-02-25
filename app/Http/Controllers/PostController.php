<?php

namespace App\Http\Controllers;

use App\Ioc\DbConnection as IocDbConnection;
use App\Models\post;
use App\Models\rate;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(IocDbConnection $connection)
    {
        var_dump($connection);
    }
    public function index()
    {

        // $post = post::find(13);
        // dd($post->rates->toArray());
        $posts = Post::with(['user', 'rates'])->get();
        return view('post', compact('posts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(post $post)
    {
        //
    }

    public function edit(post $post)
    {
        //
    }

    public function update(Request $request, post $post)
    {
        //
    }

    public function destroy(post $post)
    {
        //
    }

    public function rateing(Request $request, post $post)
    {

        $rate = $request->get('rate');

        $dataArray = [
            'rate' => $rate,
            'rateable_id' => $post->id,
            'rateable_type' => get_class($post),
        ];
        Rate::create($dataArray);
        $request->session()->flash('msg', 'رای با موفقیت ثبت شد');
        return back();
    }
}