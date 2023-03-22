<?php

use App\Http\Controllers\auth\PaymentController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;


Route::prefix('User/')->name('User.')->middleware('auth','user','status')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');


});
