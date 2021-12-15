<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

//
//Route::group(['middleware' => ['auth']], function (){
//    Route::get('secured/package-list', [PackageController::class, 'index'])->name('package.index');
//    Route::post('/secured/package-store', [PackageController::class, 'store']);
//});

Route::group(['prefix' => '/secured', 'middleware' => ['auth']], function (){
    Route::get('/package-list', [PackageController::class, 'index'])->name('package.index');
    Route::post('/package-store', [PackageController::class, 'store']);
});
