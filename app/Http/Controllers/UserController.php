<?php

namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Http\Requests\RequestTest;
use App\Imports\UsersImport;
use App\Models\MyUser;
use Illuminate\Http\Request;
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
        MyUser::create($request->all());
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
        $user = MyUser::find($id);
        return view('user_edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
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
}

