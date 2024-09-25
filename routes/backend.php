<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;

//!Route for DashboardController
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//! Route for SocialMediaController
Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social.index');
Route::post('/social-media', [SocialMediaController::class, 'update'])->name('social.update');
Route::delete('/social-media/{id}', [SocialMediaController::class, 'destroy'])->name('social.delete');



//! Route for ProfileController
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.setting');
Route::post('/update-profile', [ProfileController::class, 'UpdateProfile'])->name('update.profile');
Route::post('/update-profile-password', [ProfileController::class, 'UpdatePassword'])->name('update.Password');
Route::post('/update-profile-picture', [ProfileController::class, 'UpdateProfilePicture'])->name('update.profile.picture');
