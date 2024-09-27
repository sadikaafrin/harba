<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Backend\BannerController;
use App\Http\Controllers\Web\Backend\ServiceTypeController;


//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::get('/create_banner', [BannerController::class, 'index'])->name('CreateBanner.index');
 Route::post('/create_banner', [BannerController::class, 'save']);
 Route::get('/show_banner',[BannerController::class,'get'])->name('ShowBanner.get');
 Route::get('/delete_banner/{id}',[BannerController::class,'delete']);
 Route::get('/update_banner/{id}',[BannerController::class,'edit']);
 Route::post('/update_banner',[BannerController::class,'update']);


 Route::get('/create_service_type', [ServiceTypeController::class, 'index'])->name('CreateServiceType.index');
 Route::post('/create_service_type', [ServiceTypeController::class, 'save']);
 Route::get('/show_service_type', [ServiceTypeController::class, 'get'])->name('ShowServiceType.get');
 Route::get('/update_service_type/{id}', [ServiceTypeController::class, 'edit']);
 Route::post('/update_service_type', [ServiceTypeController::class, 'update']);
 Route::get('/delete_service_type/{id}', [ServiceTypeController::class, 'delete']);
