<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Frontend Index Route
Route::get('/', [FrontController::class, 'index'])->name('/');


Route::get('/users/login', [AdminController::class, 'userLogin'])->name('user.login');
Route::get('/users/registration', [AdminController::class, 'registration'])->name('user.registration');
Route::post('/users/registers', [AdminController::class, 'registers'])->name('registers');
Route::post('/users/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');


// Fallback Routes
Route::fallback(function (){
    return view('admin.404');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
