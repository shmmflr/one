<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\RequestTest;
use App\Imports\UsersImport;
use App\Models\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->only('destroy');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = MyUser::paginate();
        return view('user', compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestTest $request)
    {
//       dd($request->except(['l_name','f_name']));
        \LogActivity::addToLog('کاربر ساخته شد.');
        $user = MyUser::create($request->validated());
//        dd($user);

        return back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        \LogActivity::addToLog('به صفحه ویرایش آمد');
        $user = MyUser::find($id);
        return view('user_edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'l_name' => 'required',
            'f_name' => 'required',
            'age' => 'required',
        ];
//مثال کلی
//        $customMessages = [
//            'required' => 'The :attribute field can not be blank.'
//        ];

        //ریز شدن
        $customMessages = [
            'l_name.required' => 'نام رو پر نکردی اخوی',
            'f_name.required' => 'اینم رو پر نکردی !!!',
            'age.required' => 'سنت چنده دادو',
            'age.min' => 'سنت نباید کمتر از 5 باشه دادو',
        ];
        \LogActivity::addToLog('کاربر را ویرایش کرد');
        $this->validate($request, $rules, $customMessages);
        $user = MyUser::find($id)->update($request->all());
//        dd($user);
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \LogActivity::addToLog('کاربر را حذف کرد.');
        $user = MyUser::find($id);
        $user->delete();
        return back();
    }


    public function import(Request $request)
    {
        Excel::import(new UsersImport, $request->file('file')->store('temp'));
        return back();

        return redirect('/user')->with('success', 'All good!');
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'madi.xlsx');
    }


    public function log()
    {
        \LogActivity::addToLog('My Testing Add To Log.');
    }

    public function showLog()

    {

        $logs = \LogActivity::logActivityLists();

        return view('logActivity', compact('logs'));

    }
}

