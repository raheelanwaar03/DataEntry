<?php

use App\Http\Controllers\admin\AdminDashboardControlller;
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
Route::get('Payment/Page/Text',[AdminDashboardControlller::class,'paymentText'])->name('Payment.Page.Text');
Route::post('Store/Payment/Page/Text',[AdminDashboardControlller::class,'storePaymentText'])->name('Store.Payment.Page.Text');


});
