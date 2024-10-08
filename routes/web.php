<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\SinglePropertyController;
use App\Http\Controllers\Web\Frontend\ListingController;
use App\Http\Controllers\Web\Frontend\AddListingController;
use App\Http\Controllers\Web\Frontend\UserDashboardController;
use App\Http\Controllers\Web\Frontend\UserAdvertisement;
use App\Http\Controllers\Web\Frontend\UserRequestController;
use App\Http\Controllers\Web\Backend\AppartmentTypeController;
use App\Http\Controllers\Auth\GoogleController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/auth/google', [GoogleController::class, 'GoogleRedirect'])->name('google-login');
    Route::any('/auth/google/callback', [GoogleController::class, 'GoogleCallback']);

    //!Route for HomeController
    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/appartment-type/search', [HomeController::class, 'typersearch'])->name('appartment.type.search');

    // Route::get('/appartment-type/{type}', [HomeController::class, 'filterByAppartmentType'])->name('appartment.type.search');

    Route::get('/listing-single/{id}', [SinglePropertyController::class, 'index'])->name('single-property');
    // Route::post('/user-request', [SinglePropertyController::class,'store'])->name('user-request');
    Route::get('/search-properties', [SinglePropertyController::class, 'search'])->name('properties.search');

    Route::get('/advance-listing', [ListingController::class, 'index'])->name('listing-search');
    Route::get('/advance-search-listing', [ListingController::class, 'advanceSearch'])->name('advance.listing-search');

    Route::get('/add-listing', [AddListingController::class, 'AddListing'])->name('add-listing');
    Route::post('/add-listing', [AddListingController::class, 'store'])->name('add-listing.store');

    Route::get('/user-dashboard', [UserDashboardController::class, 'UserDashboardController'])->name('user-dashboard');

    Route::get('/user-all-requests', [UserDashboardController::class, 'AllRequest'])->name('user-all-requests');
    Route::get('/edit-profile', [UserDashboardController::class, 'EditProfile'])->name('edit-profile');



    Route::post('/profile/update-picture', [UserDashboardController::class, 'updatePicture'])->name('profile.updatePicture');


    Route::post('/profile-update', [UserDashboardController::class, 'profileUpdate'])->name('profile-update');

    Route::post('/change-password', [UserDashboardController::class, 'changePassword'])->name('change-password');
    Route::post('/update-user-profile', [UserDashboardController::class, 'Update'])->name('update-user-profile');

    //!User Advertisement
    Route::get('/user-advertisement', [UserAdvertisement::class, 'advertisemnent'])->name('user-advertisement');

    //!user Request
    Route::post('/user-request', [UserRequestController::class, 'store'])->name('user-request');
    Route::get('/user-request-search', [UserRequestController::class, 'search'])->name('user-request.search');


    Route::get('lang/{locale}', function ($locale) {
        if (in_array($locale, ['en', 'bn'])) {
            session(['locale' => $locale]);
        }
        return redirect()->back();
    });

    // Route::fallback(function(){
    //     return "<h4>URL not found</h4>";
    // });
});


require __DIR__ . '/auth.php';
