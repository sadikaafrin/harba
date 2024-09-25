<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\CMS\WhyCohosePropertyController;
use App\Http\Controllers\Web\Backend\CMS\WorkSectionController;
use App\Http\Controllers\Web\Backend\CMS\DiscoverController;
use App\Http\Controllers\Web\Backend\CMS\ContactController;

Route::middleware(['auth', 'role:admin'])->group(function () {
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
    Route::patch('/cms/message', [WhyCohosePropertyController::class, 'message'])->name('message.update');
    Route::patch('/cms/image', [WhyCohosePropertyController::class, 'image'])->name('image.update');



    Route::get('/cms/worksection', [WorkSectionController::class, 'index'])->name('work-section.index');
    Route::patch('/cms/work-section-update', [WorkSectionController::class, 'store'])->name('work-section.update');
    Route::patch('/cms/work-section-one', [WorkSectionController::class, 'workSectionOne'])->name('work-section-one.update');
    Route::patch('/cms/work-section-two', [WorkSectionController::class, 'workSectionTwo'])->name('work-section-two.update');
    Route::patch('/cms/work-section-three', [WorkSectionController::class, 'workSectionThree'])->name('work-section-three.update');
    Route::patch('/cms/work-section-image', [WorkSectionController::class, 'workSectionImage'])->name('work-section-image.update');


    Route::get('/cms/discove-section', [DiscoverController::class, 'index'])->name('discove-section.index');
    Route::patch('/cms/discove-section-update', [DiscoverController::class, 'store'])->name('discove-section.update');

    Route::get('/cms/contact-section', [ContactController::class, 'index'])->name('contact-section.index');
    Route::patch('/cms/contact-section-update', [ContactController::class, 'store'])->name('contact-section.update');

});
