<?php

namespace App\Http\Controllers;

use App\Models\MyUser;

class LangController extends Controller
{
    public function indexEn()
    {

// زبان
// تغییر زبان دستی
        app()->setlocale('en');

        // انتخاب بین چندین گزینه برای تعداد

        // dd(trans_choice('messages.sheep', 11));

//  برای فایلی در پوشه fa یا en یا هر پوشه دیگر
        // dd(__('messages.welcome'));
        // or
        // dd(trans('messages.welcome'));

        // برای خواندن از فایل json حتما بای __ استفاده کرد
        dd(__('welcome', ['ab' => 'سلام']));

    }
    public function indexFa()
    {
        // dd(__('messages'));
        $user = MyUser::find(1);
        $name = $user->l_name;
        dd(__('welcome', ['name' => $name]));
    }
}