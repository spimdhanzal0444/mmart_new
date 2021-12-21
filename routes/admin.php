<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/secured', 'middleware' => ['auth']], function (){
    Route::get('/package-list', [PackageController::class, 'index'])->name('package.index');
    Route::get('/package-all', [PackageController::class, 'allRecord']);
    Route::post('/package-store', [PackageController::class, 'store']);
    Route::post('/package-update', [PackageController::class, 'update']);
    Route::delete('/package-delete/{id}', [PackageController::class, 'delete']);

    Route::get('/package-wise-member', [PackageController::class, 'packake_wise_member'])->name('package.wise.member');
    Route::get('/package-member/list/{id}', [PackageController::class, 'packake_wise_member_list'])->name('view.member.package');

    // Customer List
    Route::get('/customers', [CustomerController::class, 'index'])->name('members.list');
    Route::get('/customers-all', [CustomerController::class, 'allcustomer'])->name('customer.all'); // don't change url
    Route::post('/change-agent-status', [CustomerController::class, 'agent_status'])->name('customer.agent_status');
    Route::post('/customer-update', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customers/destroy/{id}',  [CustomerController::class, 'destroy'])->name('customers.destroy'); // don't change url

    // Agent List
    Route::get('/agent-list', [CustomerController::class, 'agentList'])->name('agent.list');

    // Member Payment routes
    Route::get('payment', [CustomerController::class, 'payment'])->name('customers.payment');
    Route::get('payment/action/{id}', [CustomerController::class, 'payment_action'])->name('action.payment');
    Route::get('payment/action-rejected/{id}', [CustomerController::class, 'payment_action_rejected'])->name('action.payment.rejected');
    Route::get('payment/view/{id}', [CustomerController::class, 'payment_details_view']); // don't change url
    // Customer Withdraw
    Route::get('/withdraw', [CustomerController::class, 'withdrawFund'])->name('customers.withdraw');
    Route::get('/withdraw/details/{id}', [CustomerController::class, 'withdrawDetails'])->name('action.withdraw.details');
    Route::post('withdraw/action', [CustomerController::class, 'withdrawDone'])->name('action.withdraw.done');









    Route::get('daily-bonus', 'CustomerController@dailyBonus')->name('customers.dailyBonus');
    Route::post('missed-bonus-adjustment', 'CustomerController@missedBonusAdjustment')->name('customers.missed.bonus');


    // next delete routes
    Route::post('/bulk-customer-delete', [CustomerController::class, 'bulk_customer_delete'])->name('bulk-customer-delete');
//    Route::get('/customers/update/{id}', 'CustomerController@update')->name('customers.update');
//    Route::get('/customers/login/{id}', 'CustomerController@login')->name('customers.login');
    Route::get('customers_ban/{customer}', 'CustomerController@ban')->name('customers.ban');


});
