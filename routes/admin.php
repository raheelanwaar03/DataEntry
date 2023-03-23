<?php

use App\Http\Controllers\admin\AdminDashboardControlller;
use App\Http\Controllers\admin\DailyTaskController;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin/')->name('Admin.')->middleware('auth','admin')->group(function () {

Route::get('Dashboard',[AdminDashboardControlller::class,'index'])->name('Dashboard');
Route::get('All/Users',[AdminDashboardControlller::class,'allUser'])->name('All.Users');
Route::get('All/Pending/Users',[AdminDashboardControlller::class,'pendingUsers'])->name('All.Pending.Users');
Route::get('All/Rejected/Users',[AdminDashboardControlller::class,'rejectedUsers'])->name('All.Rejected.Users');
Route::get('All/Approved/Users',[AdminDashboardControlller::class,'approvedUsers'])->name('All.Approved.Users');

// User account action

Route::get('Approve/User/Account/{id}',[AdminDashboardControlller::class,'approveUser'])->name('Approve.User.Account');
Route::get('Rejected/User/Account/{id}',[AdminDashboardControlller::class,'rejectedUser'])->name('Rejected.User.Account');
Route::get('Pending/User/Account/{id}',[AdminDashboardControlller::class,'pendingUser'])->name('Pending.User.Account');


// Admin can set user referal limite

Route::get('Set/Limite',[AdminDashboardControlller::class,'referalLimite'])->name('Set.Limite');
Route::post('Store/Set/Limite',[AdminDashboardControlller::class,'storeLimite'])->name('Store.Set.Limite');
Route::get('Edit/Limite/{id}',[AdminDashboardControlller::class,'editLimite'])->name('Edit.Limite');
Route::post('Update/Limite/{id}',[AdminDashboardControlller::class,'updateLimite'])->name('Update.Referal.Limite');
Route::get('Payment/Page/Text',[AdminDashboardControlller::class,'paymentText'])->name('Payment.Page.Text');
Route::post('Store/Payment/Page/Text',[AdminDashboardControlller::class,'storePaymentText'])->name('Store.Payment.Page.Text');
Route::get('Edit/Payment/Page/Text/{id}',[AdminDashboardControlller::class,'editPaymentText'])->name('Edit.Payment.Page.Text');
Route::post('Update/Payment/Page/Text/{id}',[AdminDashboardControlller::class,'updatePaymentText'])->name('Update.Payment.Page.Text');
Route::get('Verification/Text',[AdminDashboardControlller::class,'verificationPage'])->name('Verification.Page.Text');
Route::post('Store/Verification/Text',[AdminDashboardControlller::class,'storeVerificationPage'])->name('Store.Verification.Page.Text');
Route::get('Edit/Verification/Text/{id}',[AdminDashboardControlller::class,'editVerificationPage'])->name('Edit.Verification.Page.Text');
Route::post('Update/Verification/Text/{id}',[AdminDashboardControlller::class,'updateVerificationPage'])->name('Update.Verification.Page.Text');

// Daily Task

Route::get('Daily/Task',[DailyTaskController::class,'index'])->name('Daily.Task');
Route::post('Store/Daily/Task',[DailyTaskController::class,'store'])->name('Store.Daily.Task');
Route::get('All/Daily/Task',[DailyTaskController::class,'allTask'])->name('All.Daily.Tasks');
Route::get('Edit/Daily/Task/{id}',[DailyTaskController::class,'editTask'])->name('Edit.Daily.Tasks');
Route::post('Update/Daily/Task/{id}',[DailyTaskController::class,'updateTask'])->name('Update.Daily.Tasks');



});
