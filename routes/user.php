<?php

use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/User',[UserDashboardController::class,'index'])->name('User.dashboard');
