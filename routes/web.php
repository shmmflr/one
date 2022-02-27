<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\IocServiceController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RateController;
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

Route::get('/collection', [CollectionController::class, 'index'])->name('collection');

// Rate

Route::get('/rating', [RateController::class, 'index'])->name('rate');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::post('/post-rating/{post}', [PostController::class, 'rateing'])->name('rateing.post');

// End Rate

// IOC Service Container
Route::get('/ioc', [IocServiceController::class, 'index'])->name('ioc');
// End IOC

Route::get('/product-price-xep', [\App\Http\Controllers\SubscriptionController::class, 'index'])->name('pro.price.exp');
Route::post('/product-price-xep-insert', [\App\Http\Controllers\SubscriptionController::class, 'store'])->name('pro.price.exp.insert');
Route::any('/product-price-xep-edit/{subscription}', [\App\Http\Controllers\SubscriptionController::class, 'edit'])->name('pro.price.exp.edit');
Route::put('/product-price-xep-update/{subscription}', [\App\Http\Controllers\SubscriptionController::class, 'update'])->name('pro.price.exp.update');
Route::
    prefix('admin/test/profile')->
//middleware('auth.basic')->
    group(function () {
    Route::get('/invoke', \App\Http\Controllers\InvokeController::class)->name('invoke');

    Route::resource('/user', UserController::class)->except(['create', 'show']);

    Route::post('file-import', [UserController::class, 'import'])->name('import');
    Route::get('users/export/', [UserController::class, 'export'])->name('export');
});