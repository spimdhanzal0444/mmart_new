<?php

use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'secured', 'middleware' => ['auth']], function (){
    Route::get('package-list', [PackageController::class, 'index'])->name('package.index');
});
