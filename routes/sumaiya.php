<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Backend\BannerController;


//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/create_banner', [BannerController::class, 'index'])->name('CreateBanner.index');
 Route::post('/create_banner', [BannerController::class, 'save']);
 Route::get('/show_banner',[BannerController::class,'get']);
 Route::get('/delete_banner/{id}',[BannerController::class,'delete']);
 Route::get('/update_banner/{id}',[BannerController::class,'edit']);
 Route::post('/update_banner',[BannerController::class,'update']);
