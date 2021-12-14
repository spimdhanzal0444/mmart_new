<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CreativeController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\FotterController;
use App\Http\Controllers\admin\GeneralSettingController;
use App\Http\Controllers\admin\HomeCOntactController;
use App\Http\Controllers\admin\RankController;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\admin\WorkProcessController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontController::class, 'index'])->name('/');



// Admin Routes
Route::get('admin', [AdminController::class, 'login'])->name('admin');
Route::post('admin/login-post', [AdminController::class, 'login_post'])->name('login.post');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AdminController::class, 'logout'])->name('/logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('/admin');
    Route::get('/admin/customer/dashboard', [CustomerController::class, 'profileIndex'])->name('admin.customer');

    // Sowing Updated Form
    Route::get('/admin/general/setting', [GeneralSettingController::class, 'index'])->name('admin.general.index');
    Route::get('/admin/general/setting/show', [GeneralSettingController::class, 'show'])->name('admin.general.show');

    // General Setting Routes
    Route::post('/admin/general/setting/update/{id}', [GeneralSettingController::class, 'update'])->name('admin.general.update');

    // Creative Routes
    Route::post('/admin/creative/update/{id}', [CreativeController::class, 'update'])->name('admin.creative.update');

    // WorkProcess Routes
    Route::post('/admin/work-process/update/{id}', [WorkProcessController::class, 'update'])->name('admin.work.update');

    // WorkProcess Routes
    Route::post('/admin/home-contact/update/{id}', [HomeCOntactController::class, 'update'])->name('admin.home.contact.update');

    // PricingController Routes
    Route::get('/admin/home/rank', [RankController::class, 'index'])->name('admin.rank');
    Route::get('/admin/home/rank/show', [RankController::class, 'show'])->name('admin.rank.show');
    Route::put('/admin/home/rank/update/{id}', [RankController::class, 'update'])->name('admin.rank.update');

    //Footer Routes
    Route::get('/admin/footer', [FotterController::class, 'index'])->name('admin.footer');
    Route::post('/admin/footer/post/{id}', [FotterController::class, 'update'])->name('admin.footer.update');


    // ADVANCE ROUTE
    Route::get('secured/customers', [CustomerController::class, 'index'])->name('members.list');

});



// Security Routes
Route::fallback(function (){
    return view('admin.404');
});
Auth::routes();
Route::get('register', function (){
    return redirect('admin');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
