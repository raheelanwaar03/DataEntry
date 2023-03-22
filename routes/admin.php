<?php

use App\Http\Controllers\admin\AdminDashboardControlller;
use Illuminate\Support\Facades\Route;


Route::prefix('Admin/')->name('Admin.')->middleware('auth','admin')->group(function () {

Route::get('Dashboard',[AdminDashboardControlller::class,'index'])->name('Dashboard');
Route::get('All/Users',[AdminDashboardControlller::class,'allUser'])->name('All.Users');

// User account action

Route::get('Approve/User/Account/{id}',[AdminDashboardControlller::class,'approveUser'])->name('Approve.User.Account');
Route::get('Rejected/User/Account/{id}',[AdminDashboardControlller::class,'rejectedUser'])->name('Rejected.User.Account');
Route::get('Pending/User/Account/{id}',[AdminDashboardControlller::class,'pendingUser'])->name('Pending.User.Account');


// Admin can set user referal limite

Route::get('Set/Limite',[AdminDashboardControlller::class,'referalLimite'])->name('Set.Limite');
Route::post('Store/Set/Limite',[AdminDashboardControlller::class,'storeLimite'])->name('Store.Set.Limite');


});
