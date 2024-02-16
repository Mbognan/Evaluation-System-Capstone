<?php

use App\Http\Controllers\Admin\AdminAuthController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/login',[AdminAuthController::class, 'login'])->name('admin.login');



// Route::group(['middleware,' => ['auth','user.type:admin'], 'prefix' => 'admin', 'as' => 'admin.'],
//  function(){
//     Route::get('/dashboard',[DashboardController::class, 'index'])->name('dasboard.index'); //admin.dashboard.index

// });
Route::group([
    'middleware' => ['auth', 'user.type:admin'],
    'prefix' => 'admin',
    'as' => 'admin.'],
        function(){
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index'); //admin.dashboard.index
            /**profile route */
            Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
            Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::put('/profile-reset', [ProfileController::class, 'reset_password'])->name('profile.reset_password');

            /**Category */
            Route::resource('/category', CategoryController::class);
});
