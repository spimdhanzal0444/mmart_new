<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

//Route::middleware(['auth'])->group(function () {
//    Route::group(['prefix' => '/secured'], function (){
//        Route::get('/package-list', [PackageController::class, 'index'])->name('package.index');
//        Route::post('/package-store', [PackageController::class, 'store'])->name('package.store');
//    });
//});


Route::group(['prefix' => '/secured', 'middleware' => ['auth']], function (){
    Route::get('/package-list', [PackageController::class, 'index'])->name('package.index');
    Route::post('/package-store', [PackageController::class, 'store'])->name('package.store');
});
