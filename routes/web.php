<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('home');
});

Route::get('/user-history', function () {
    return view('history');
});
Route::get('/spin', function () {
    return view('spins');
});
Route::get('/account', function () {
    return view('account');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/user-account', function () {
    return view('account');
});
Route::get('/dashboard', function () {
    return view('account');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::get('signup', function () {
    return view('auth.register');
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
    Route::get('charity/send/{id}',[\App\Http\Controllers\AdminController::class,'sendCharity']);

    Route::post('stripe/{id}', [\App\Http\Controllers\AdminController::class,'stripePost'])->name('stripe.post');


});


Route::prefix('user')->middleware(['auth','user'])->group(function () {

    Route::view('/index','user.index');
});



Auth::routes();
Route::get('/spinnerscreen',      [HomeController::class, 'spinnerScreen'])->name('spinnerScreen');
Route::get('/stripescreen',       [HomeController::class, 'stripeScreen'])->name('stripeScreen');
Route::post('/paymentstore',      [HomeController::class, 'stripePayment'])->name('stripePayment');
Route::get('/charityscreen',      [HomeController::class,'chairtyScreen'])->name('chairtyscreen');
Route::get('/add/charity',        [HomeController::class,'addChairtyScreen'])->name('addchairtyscreen');
Route::post('/store/charity',     [HomeController::class,'storeChairty'])->name('storeChairty');

Route::get('/home',               [HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
\Illuminate\Support\Facades\Auth::logout();
return redirect('/');
});
