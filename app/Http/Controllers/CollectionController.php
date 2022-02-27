<?php

namespace App\Http\Controllers;

class CollectionController extends Controller
{
    public function index()
    {
        $arr = collect([1, 2, 3, 4, 9, 8, 5, 6, 7, 8, 9]);

//        dd($arr->shuffle(), $arr); بهم ریختن یک آرایه
//        dd($arr->random()); انتخاب یک گزینه تصادفی در آرایه

//        dd($arr->take(2)); فقط دو تا عضو آرایه رو بهم بده
//        dd($arr->forPage(3, 2)); در صفحه سوم دو تا از عناصر رو بده بهم
//        dd($arr->unique()); اون هایی که تکراری هستن رو نده

//        dd($arr->isEmpty()); آیته ارایه خالی است
//        dd($arr->isNotEmpty()); آیا ارایه خالی نیست

//        dd($arr->pad(15, 0)); من یک آرایه با 15 عضو میخواهم اگه کمتر بود با 0 پر کن بده

//        $result = array_map(function($item){
//            return $item * 2;
//        }, $arr); پیمایش در یک آرایه

//        $result = $arr->map(function($item){
//            return $item * 2;
//        })پیمایش در یک کالکشن
//        ->map(function ($item){
//            return $item + 1;
//        });

//        dd($arr->get(2)); گرفتن عنصر دوم
//        dd($arr->nth(3)); از عنصر سوم 3تا 3تا بهم بده
//        dd($arr->all()); همه رو بده
//        dd($arr->first()); اولین عنصر
//        dd($arr->last()); آخرین عنصر
//        dd($arr->toArray()); تبدیل کن کالکشن رو به آرایه
//        dd($arr->toJson()); کاکشن رو به ابجکت تبدیل کن
//        dd($arr->count()); تعدادعضو یک آرایه
//        $arr->dump(); var_dump()
//        $arr->dd(); var_dump() + die()
//        dd($arr->has(6)); وجود یک عضودر آرایه
//        dd($arr->search(3)); میگرده ببینه چنین عنصری داریم

//        dd($arr->max());
//        dd($arr->min());
//        dd($arr->avg());
//        dd($arr->median()); عنصر وسط ارایه

//        dd($arr->pop(), $arr); حذف از انتها
//        dd($arr->shift(), $arr); حذف از ابتدا
//        dd($arr->pull(3), $arr);  حذف عنصر سوم
//        dd($arr->push('salam')); اضافه کردن به انتها
        // dd($arr->prepend('salam', '4')); اضافه کردن به ابتدا با کلید دلخواه دومین عنصر نام کلید

        // dd($arr->slice(2), $arr); دوعنصر از ابتدا حذف میکنه بقیه رو نشون میده
        // dd($arr->split(4), $arr); یک کالکشن با 4 ارایه به ما می دهد
        // dd($arr->chunk(2), $arr); تعدا کل عناصر رو میگیره و ارایه های دو عضوی به ما میده
        // dd($arr->splice(2), $arr);//فقط دو عنصر ابتدایی ارایه را باقی میگذاره
        // dd($arr->forget(3), $arr);

//        $result = $arr->filter(function($value, $key){
//            return $value >= 2;
//        }); //جهت جستجو همانند دستور where

        $arr = collect([['name' => 'foo1', 'lname' => 'bar1', 'age' => 18], ['name' => 'foo2', 'lname' => 'bar2', 'age' => 25], ['name' => 'foo3', 'lname' => 'bar3', 'age' => 12]]);
//        $result = $arr->where('name', '=', 'foo1');
//        $result = $arr->where('age', '>', 12);

//        echo '<ul>';
//        $arr->each(function($val, $key){
//            echo '<li>' . $val['name'] . ' ' . $val['lname'] . '</li>';
//        });
//        echo '</ul>';   // foreach

//        $result = $arr->map(function($val, $key){
//            return '<li>' . $val['name'] . ' ' . $val['lname'] . '</li>';
//        });
//        echo '<ul>' . $result->implode(' ') . '</ul>';

//        $result = $arr->every(function($val, $key){
//            return $val['age'] > 12;
//        }); //شریط باید روی تمام ارایه ها برقرار باشد

//        $result = $arr->reject(function($val, $key){
//            return $val['age'] > 12;
//        }); برعکس دستور فیلتر شرط نباید درست باشد

//        dd($arr->reject(function($val, $key){
//            return $val['age'] > 12;
//        }));
//
//        dd($arr->filter(function($val, $key){
//            return $val['age'] > 12;
//        }));

//         list($over12, $under12) = $arr->partition(function ($val, $key) {
//             return $val['age'] > 12;
//         });
// //
//         dd($over12, $under12);
//
//        $arr = collect([
//            'k1'=>['name' => 'foo1', 'lname'=>'bar1', 'age'=>18],
//            'k2'=>['name' => 'foo2', 'lname'=>'bar2', 'age'=>25],
//            'k3'=>['name' => 'foo3', 'lname'=>'bar3', 'age'=>12]
//        ]);

//        dd($arr->keys()); گرفتن کلید ها
//        dd($arr->values()); گرفتن مقادیر
        // dd($arr->keyBy('age'));  مقدار کلید را ما مشخص می کنیم
//        dd($arr->pluck('name', 'lname'));

//        $arr = collect(['name' => 'foo1', 'lname'=>'bar1', 'age'=>18]);
//        dd($arr->only(['name', 'lname']));
//        dd($arr->except(['name', 'lname']));

        // $a = collect(['name', 'family', 'age']);
        // $b = collect(['foo', 'bar', 'baz']);
        //    $b = collect(['sayad', 'aazmi', '28']);
//        dd($a->merge($b));
        // $t = $a->combine($b);
        // dd($t); a= key & b= value

//        $a=collect(['name' => 'sayad', 'age'=>28]);
//        dd($a->union(['age' => 30, 'family' => 'aazami']));

        // $a = collect(['name' => 'sayad', 'family' => 'aazami', 'age' => 28]);
        // dd($a->reverse()); تغییر مکان ارایه
        // dd($a->flip()); تغییر جای کلید و مقدار
//        dd($a->sort()); مرتب کردن
//
        $arr = collect([
            'k3' => ['name' => 'foo3', 'lname' => 'bar3', 'age' => 60],
            'k1' => ['name' => 'foo1', 'lname' => 'bar1', 'age' => 18],
            'k20' => ['name' => 'foo2', 'lname' => 'bar2', 'age' => 25],
        ]);

        // dd($arr->sort());
        // dd($arr->sortKeys());
//        dd($arr->sortBy('age'));
//        dd($arr->sortByDesc('age'));

        // $arr = collect([[1, 2, 3], [4, 5, 6], [7, [8, [9]]], [10, 11]]);

        // return $arr->collapse();
        // return $arr->flatten();

//        dd($result);
//        dd('tamam');

        // return $result;
    }
}