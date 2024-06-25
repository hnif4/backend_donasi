<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CampaignController;
use App\Http\Controllers\Api\SliderController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\DonationController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * API Register
 */
Route::post('/register', [RegisterController::class, 'register']);

/**
 * API Login
 */
Route::post('/login', [LoginController::class, 'login']);

/**
 * API Category
 */
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/{slug}', [CategoryController::class, 'show']);
Route::get('/categoryHome', [CategoryController::class, 'categoryHome']);

/**
 * API Campaign
 */
Route::get('/campaign', [CampaignController::class, 'index']);
Route::get('/campaign/{slug}', [CampaignController::class, 'show']);

/**
 * API Slider
 */
Route::get('/slider', [SliderController::class, 'index']);

/**
 * API Profile
 */
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth:api');
Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth:api');
Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->middleware('auth:api');

/**
 * API Donation
 */
Route::get('/donation', [DonationController::class, 'index'])->middleware('auth:api');
Route::post('/donation', [DonationController::class, 'store'])->middleware('auth:api');
Route::post('/donation/notification', [DonationController::class, 'notificationHandler']);
