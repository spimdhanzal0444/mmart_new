<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CreativeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FotterController;
use App\Http\Controllers\admin\GeneralSettingController;
use App\Http\Controllers\admin\HomeCOntactController;
use App\Http\Controllers\admin\RankWebController;
use App\Http\Controllers\admin\WorkProcessController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', [AdminController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'adminAuthenticate'])->name('admin.loggedin');

Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Sowing Updated Form
    Route::get('/general/setting', [GeneralSettingController::class, 'index'])->name('admin.general.index');
    Route::get('/general/setting/show', [GeneralSettingController::class, 'show'])->name('admin.general.show');

    // General Setting Routes
    Route::post('/general/setting/update/{id}', [GeneralSettingController::class, 'update'])->name('admin.general.update');

    // Creative Routes
    Route::post('/creative/update/{id}', [CreativeController::class, 'update'])->name('admin.creative.update');

    // WorkProcess Routes
    Route::post('/work-process/update/{id}', [WorkProcessController::class, 'update'])->name('admin.work.update');

    // WorkProcess Routes
    Route::post('/home-contact/update/{id}', [HomeCOntactController::class, 'update'])->name('admin.home.contact.update');

    // PricingController Routes
    Route::get('/home/rank', [RankWebController::class, 'index'])->name('admin.rank');
    Route::get('/home/rank/show', [RankWebController::class, 'show'])->name('admin.rank.show');
    Route::put('/home/rank/update/{id}', [RankWebController::class, 'update'])->name('admin.rank.update');

    //Footer Routes
    Route::get('/footer', [FotterController::class, 'index'])->name('admin.footer');
    Route::post('/footer/post/{id}', [FotterController::class, 'update'])->name('admin.footer.update');
});



Route::group(['prefix' => '/secured', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

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

    // All Orders
    Route::get('/all_orders', [OrderController::class, 'all_orders'])->name('all_orders.index');
    Route::get('/orders/destroy/{id}',  [OrderController::class, 'destroy'])->name('orders.destroy');




    Route::get('/all_orders/{id}/show', 'OrderController@all_orders_show')->name('all_orders.show');





    Route::get('daily-bonus', 'CustomerController@dailyBonus')->name('customers.dailyBonus');
    Route::post('missed-bonus-adjustment', 'CustomerController@missedBonusAdjustment')->name('customers.missed.bonus');
    // next delete routes
    Route::post('/bulk-customer-delete', [CustomerController::class, 'bulk_customer_delete'])->name('bulk-customer-delete');
//    Route::get('/customers/update/{id}', 'CustomerController@update')->name('customers.update');
//    Route::get('/customers/login/{id}', 'CustomerController@login')->name('customers.login');
    Route::get('customers_ban/{customer}', 'CustomerController@ban')->name('customers.ban');


});
