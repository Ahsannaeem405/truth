<?php

use App\Http\Controllers\CharityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;

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
Route::get('/contact', function () {
    return view('contact');
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
    Route::get('status/{id}',[\App\Http\Controllers\AdminController::class,'status']);


    Route::post('stripe/{id}', [\App\Http\Controllers\AdminController::class,'stripePost'])->name('stripe.post');
    Route::post('stripe/payment/{id}', [\App\Http\Controllers\AdminController::class,'stripePost1'])->name('stripe.post1');


    Route::post('add/credit', [\App\Http\Controllers\AdminController::class,'add_credit']);
    Route::get('view/detail/{id}', [\App\Http\Controllers\AdminController::class,'view_detail']);
    // Route::get('charity/payment', [\App\Http\Controllers\AdminController::class,'charity_payment']);


});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook', [FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);

Route::prefix('user')->middleware(['auth','user'])->group(function () {
    

    Route::view('/index','user.index');



    Route::get('/privacy',[CharityController::class,'privacy']);
    Route::get('/terms',[CharityController::class,'terms']);
    Route::get('/delete',[CharityController::class,'delete']);

    Route::get('user-history',[CharityController::class,'history']);
    Route::get('spin',[CharityController::class,'spins']);



    Route::get('/account', function () {
        return view('account');
    });
    Route::get('add/credit_info', function () {
        return view('credit_info');
    });

    

    Route::get('/user-account', function () {
        return view('account');
    });
    Route::get('/dashboard', function () {
        return view('account');
    });



    Route::get('add/credit',[CharityController::class,'index']);


    Route::post('edit/profile',[CharityController::class,'edit_profile']);
    Route::post('add/donation',[CharityController::class,'add_donation']);
    Route::post('add/percent',[CharityController::class,'add_percent']);



});



Auth::routes();

Route::get('change_stauts',[\App\Http\Controllers\AdminController::class,'change_stauts']);
Route::get('formSub',[\App\Http\Controllers\CharityController::class,'add_donation']);


Route::post('/stripe-payment',[CharityController::class, 'StripePost'])->name('stripe.payment');

Route::get('/spinnerscreen',[HomeController::class, 'spinnerScreen'])->name('spinnerScreen');
Route::get('/stripescreen',[HomeController::class, 'stripeScreen'])->name('stripeScreen');
Route::post('/paymentstore',[HomeController::class, 'stripePayment'])->name('stripePayment');
Route::get('/charityscreen',[HomeController::class,'chairtyScreen'])->name('chairtyscreen');
Route::get('/add/charity',[HomeController::class,'addChairtyScreen'])->name('addchairtyscreen');
Route::post('/store/charity',[HomeController::class,'storeChairty'])->name('storeChairty');

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
\Illuminate\Support\Facades\Auth::logout();
return redirect('/');
});
