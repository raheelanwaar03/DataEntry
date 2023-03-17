<?php

use App\Http\Controllers\admin\AdminDashboardControlller;
use Illuminate\Support\Facades\Route;

Route::get('/Admin',[AdminDashboardControlller::class,'index'])->name('Admin.dashboard');
