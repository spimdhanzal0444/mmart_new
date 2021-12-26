<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CustomerAuthenticationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/cc', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->route('/');
});

// Frontend Index Route
Route::get('/', [FrontController::class, 'index'])->name('/');


Route::group(['middleware' => ['user']], function() {
    Route::get('/customer/logout', [CustomerAuthenticationController::class, 'customerLogout'])->name('customer.logout');
    Route::get('/customer/dashboard', [CustomerController::class, 'profileIndex'])->name('customer.dashboard');
    Route::get('/customer/buynow', [CustomerController::class, 'profileIndex'])->name('package.buynow');
    Route::get('/package/buynow', [CustomerController::class, 'buynow'])->name('customer.package.buynow');  // front buy now button route
    Route::post('/package/buynow/done', [CustomerController::class, 'buynowDone'])->name('customer.payment.done');
    Route::post('/package/buynow/wallet/done', [CustomerController::class, 'buynowWalletDone'])->name('customer.payment.wallet.done');
    Route::post('/package/buynow/wallet/done', [CustomerController::class, 'buynowWalletDone'])->name('customer.payment.wallet.done');

    Route::get('/wallet', [CustomerController::class, 'mywallet'])->name('mywallet.index');
    Route::get('/customer/ledger', [CustomerController::class, 'myLedgerInfo'])->name('myledger');

});



Route::get('/users/login', [CustomerAuthenticationController::class, 'userLogin'])->name('user.login');
Route::get('/users/registration', [CustomerAuthenticationController::class, 'registration'])->name('user.registration');
Route::post('/users/registers', [CustomerAuthenticationController::class, 'registers'])->name('registers');
Route::post('/users/authenticate', [CustomerAuthenticationController::class, 'authenticate'])->name('authenticate');


// Fallback Routes
Route::fallback(function (){
    return view('admin.404');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
