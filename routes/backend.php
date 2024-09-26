<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Backend\DashboardController;
use App\Http\Controllers\Web\Backend\Settings\SocialMediaController;
use App\Http\Controllers\Web\Backend\Settings\ProfileController;
use App\Http\Controllers\Web\Backend\CategoryController;
use App\Http\Controllers\Web\Backend\AppartmentTypeController;
use App\Http\Controllers\Web\Backend\AmenitiesController;
use App\Http\Controllers\Web\Backend\CMS\WhyCohosePropertyController;
use App\Http\Controllers\Web\Backend\CMS\WorkSectionController;
use App\Http\Controllers\Web\Backend\CMS\DiscoverController;
use App\Http\Controllers\Web\Backend\CMS\ContactController;
use App\Http\Controllers\Web\Backend\AllCityController;
use App\Models\Amenity;

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

    //! Route for Property Category
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/category', 'index')->name('category.index');
        Route::get('/category/add', 'create')->name('category.create');
        Route::post('/category/store', 'store')->name('category.store');
        Route::get('/category/edit/{id}', 'edit')->name('category.edit');
        Route::post('/category/update/{id}', 'update')->name('category.update');
        Route::delete('/category/delete/{id}', 'destroy')->name('category.destroy');
        Route::get('/category/status/{id}',  'status')->name('category.status');
    });

    //! Route for Appartment Type
    Route::controller(AppartmentTypeController::class)->group(function () {
        Route::get('/appartment-type', 'index')->name('appartment-type.index');
        Route::get('/appartment-type/add', 'create')->name('appartment-type.create');
        Route::post('/appartment-type/store', 'store')->name('appartment-type.store');
        Route::get('/appartment-type/edit/{id}', 'edit')->name('appartment-type.edit');
        Route::post('/appartment-type/update/{id}', 'update')->name('appartment-type.update');
        Route::delete('/appartment-type/delete/{id}', 'destroy')->name('appartment-type.destroy');
        Route::get('/appartment-type/status/{id}',  'status')->name('appartment-type.status');
    });

     //! Route for All City
     Route::controller(AllCityController::class)->group(function () {
        Route::get('/all-cities', 'index')->name('all-cities.index');
        Route::get('/all-cities/add', 'create')->name('all-cities.create');
        Route::post('/all-cities/store', 'store')->name('all-cities.store');
        Route::get('all-cities/edit/{id}', 'edit')->name('all-cities.edit');
        Route::post('/all_cities/update/{id}', 'update')->name('all-cities.update');
        Route::delete('/all-cities/delete/{id}', 'destroy')->name('all-cities.destroy');
        Route::get('/all-cities/status/{id}',  'status')->name('all-cities.status');
    });

     //! Route for Amenities
     Route::controller(AmenitiesController::class)->group(function () {
        Route::get('/amenities', 'index')->name('amenities.index');
        Route::get('/amenities/add', 'create')->name('amenities.create');
        Route::post('/amenities/store', 'store')->name('amenities.store');
        Route::get('/amenities/edit/{id}', 'edit')->name('amenities.edit');
        Route::post('/amenities/update/{id}', 'update')->name('amenities.update');
        Route::delete('/amenities/delete/{id}', 'destroy')->name('amenities.destroy');
        Route::get('/amenities/status/{id}',  'status')->name('amenities.status');
    });



    // // CMS Pages
    // Route::get('/cms', [WhyCohosePropertyController::class, 'index'])->name('whychoose_our_property.index');
    // Route::patch('/cms/why-choose_our_property', [WhyCohosePropertyController::class, 'store'])->name('whychoose_our_property.update');
    // Route::patch('/cms/support_section', [WhyCohosePropertyController::class, 'supportSectionStore'])->name('supprot_section.update');


    //! CMS Pages


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
