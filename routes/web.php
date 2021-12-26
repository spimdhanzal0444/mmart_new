<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CustomerAuthenticationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Route;


Route::get('/cc', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->route('home');
});
// Frontend Index Route
Route::get('/', [FrontController::class, 'index'])->name('/');


Route::group(['middleware' => ['user']], function() {
    Route::get('/customer/logout', [CustomerAuthenticationController::class, 'customerLogout'])->name('customer.logout');
    Route::get('/customer/dashboard', [CustomerController::class, 'profileIndex'])->name('customer.dashboard');
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
