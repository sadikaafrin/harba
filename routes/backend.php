<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\CMS\WhyCohosePropertyController;

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


// // CMS Pages
// Route::get('/cms', [WhyCohosePropertyController::class, 'index'])->name('whychoose_our_property.index');
// Route::patch('/cms/why-choose_our_property', [WhyCohosePropertyController::class, 'store'])->name('whychoose_our_property.update');
// Route::patch('/cms/support_section', [WhyCohosePropertyController::class, 'supportSectionStore'])->name('supprot_section.update');





    Route::get('/cms', [WhyCohosePropertyController::class, 'index'])->name('whychoose_our_property.index');
    Route::patch('/cms/why-choose_our_property', [WhyCohosePropertyController::class, 'store'])->name('whychoose_our_property.update');
    Route::patch('/cms/support_section', [WhyCohosePropertyController::class, 'supportSectionStore'])->name('support_section.update');
    Route::patch('/cms/admin_section', [WhyCohosePropertyController::class, 'adminSection'])->name('admin_section.update');
    Route::patch('/cms/mobile_friendly', [WhyCohosePropertyController::class, 'mobileFriendly'])->name('mobile_friendly.update');


