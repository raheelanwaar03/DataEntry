<?php

use App\Http\Controllers\auth\PaymentController;
use App\Http\Controllers\user\UserDashboardController;
use Illuminate\Support\Facades\Route;

// registeration fees
Route::get('Registeration/Fees',[PaymentController::class,'registerationFees'])->name('Registeration.Fees');
Route::post('/Payment/Store',[PaymentController::class,'paymentStore'])->name('Payment.Store');

Route::prefix('User/')->name('User.')->middleware('auth','user','status')->group(function () {

    Route::get('Dashboard',[UserDashboardController::class,'index'])->name('Dashboard');


});
