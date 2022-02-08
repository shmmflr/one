<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('test');
})->name('login');

Route::get('/logActivity', [UserController::class, 'log'])->name('log');
Route::get('/add-to-log', [UserController::class, 'showLog'])->name('show.log');
Route::
prefix('admin/test/profile')->
//middleware('auth.basic')->
group(function () {
    Route::get('/invoke', \App\Http\Controllers\InvokeController::class)->name('invoke');

    Route::resource('/user', UserController::class)->except(['create', 'show']);


    Route::post('file-import', [UserController::class, 'import'])->name('import');
    Route::get('users/export/', [UserController::class, 'export'])->name('export');
});

