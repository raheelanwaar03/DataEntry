<?php

use App\Http\Controllers\admin\AdminDashboardControlller;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin/')->name('Admin.')->middleware('auth','admin')->group(function () {

Route::get('Dashboard',[AdminDashboardControlller::class,'index'])->name('Dashboard');
});
