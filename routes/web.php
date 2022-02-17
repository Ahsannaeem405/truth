<?php

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
    return view('auth.login');
});

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {

    //user
    Route::view('/index','admin.index');
    Route::get('/user',[\App\Http\Controllers\AdminController::class,'user']);
    Route::get('user/delete/{id}',[\App\Http\Controllers\AdminController::class,'userDelete']);

    //charity
    Route::get('/charity',[\App\Http\Controllers\AdminController::class,'chairty']);
    Route::get('/add/charity',[\App\Http\Controllers\AdminController::class,'addChairty']);
    Route::post('charity/store',[\App\Http\Controllers\AdminController::class,'storeChairty']);
    Route::get('charity/delete/{id}',[\App\Http\Controllers\AdminController::class,'deleteChairty']);
    Route::get('charity/edit/{id}',[\App\Http\Controllers\AdminController::class,'editChairty']);
    Route::post('charity/update/{id}',[\App\Http\Controllers\AdminController::class,'updateChairty']);


});


Route::prefix('user')->middleware(['auth','user'])->group(function () {

    Route::view('/index','user.index');
});


Route::prefix('charity')->middleware(['auth','charity'])->group(function () {

    Route::view('/index','charity.index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/logout', function () {
\Illuminate\Support\Facades\Auth::logout();
return redirect('/');
});
