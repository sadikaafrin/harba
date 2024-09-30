<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\SinglePropertyController;
use App\Http\Controllers\Web\Frontend\ListingController;
use App\Http\Controllers\Web\Frontend\AddListingController;
use App\Http\Controllers\Web\Frontend\UserDashboardController;

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

//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/listing-single/{id}', [SinglePropertyController::class, 'index'])->name('single-property');
Route::get('/search-properties', [SinglePropertyController::class, 'search'])->name('properties.search');

Route::get('/listing', [ListingController::class, 'index'])->name('listing-search');

Route::get('/add-listing', [AddListingController::class, 'AddListing'])->name('add-listing');
Route::post('/add-listing', [AddListingController::class, 'store'])->name('add-listing.store');

Route::get('/user-dashboard', [UserDashboardController::class, 'UserDashboardController'])->name('user-dashboard');


require __DIR__.'/auth.php';
