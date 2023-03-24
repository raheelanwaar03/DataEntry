<?php

use App\Http\Controllers\auth\PaymentController;
use App\Http\Controllers\LandingPageCotroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/',[LandingPageCotroller::class,'index'])->name('Welcome');
Route::get('/ContactUs',[LandingPageCotroller::class,'contactUs'])->name('Welcome.Contact.Us');
Route::get('/AboutUs',[LandingPageCotroller::class,'aboutUs'])->name('Welcome.About.Us');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';
