<?php

use App\Http\Controllers\CustomerController;
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
    Route::get('/package-all', [PackageController::class, 'allRecord']);
    Route::post('/package-store', [PackageController::class, 'store']);
    Route::post('/package-update', [PackageController::class, 'update']);
    Route::delete('/package-delete/{id}', [PackageController::class, 'delete']);

    Route::get('/package-wise-member', [PackageController::class, 'packake_wise_member'])->name('package.wise.member');

    Route::get('/customers', [CustomerController::class, 'index'])->name('members.list');
    Route::post('/changepassword', [CustomerController::class, 'changepassword'])->name('customer.changepassword');
    Route::post('/bulk-customer-delete', [CustomerController::class, 'bulk_customer_delete'])->name('bulk-customer-delete');
    //
    Route::get('/customers/update/{id}', 'CustomerController@update')->name('customers.update');
    Route::get('/customers/login/{id}', 'CustomerController@login')->name('customers.login');
    Route::get('customers_ban/{customer}', 'CustomerController@ban')->name('customers.ban');
    Route::get('/customers/destroy/{id}', 'CustomerController@destroy')->name('customers.destroy');

    Route::post('/change-agent-status', [CustomerController::class, 'agent_status'])->name('customer.agent_status');

});
