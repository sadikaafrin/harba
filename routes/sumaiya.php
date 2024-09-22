<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Frontend\HomeController;


//!Route for HomeController
Route::get('/', [HomeController::class, 'index'])->name('homepage');
