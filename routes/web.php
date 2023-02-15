<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\SpeakersController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\PolicesController;
use App\Http\Controllers\Frontend\FeatureController;
use App\Http\Controllers\Frontend\CourseController;

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
// ============================================================================** Login Route ** ==========================================================================
Route::get('login/show', [LoginController::class, 'login'])->name('login.show');
Route::post('login/post', [LoginController::class, 'doLogin'])->name('login.do');
Route::get('logout', [LoginController::class, 'logout'])->name('logout.front');

//facebook login
Route::get('login/facebook', [LoginController::class, 'provider'])->name('facebook.login');
Route::get('facebook/callback', [LoginController::class, 'handleCallback'])->name('facebook.callback');

//google login
Route::get('google/login', [LoginController::class, 'provider'])->name('google.login');
Route::any('google/callback', [LoginController::class, 'callbackHandel'])->name('google.login.callback');

// Route::get('google/register', [RegisterController::class, 'Provider'])->name('google.register');
// Route::get('google/callback', [RegisterController::class, 'callbackHandel'])->name('google.register.callback');

// ============================================================================** Register Route ** ==========================================================================
Route::get('register/show', [RegisterController::class, 'register'])->name('register.show');
Route::post('register/post', [RegisterController::class, 'doRegister'])->name('register.do');
// ============================================================================** Content Route ** ==========================================================================
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/about-us', [ContactController::class, 'aboutUs'])->name('about_us');

// ============================================================================** Speakers Route ** ==========================================================================

Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers.index');
Route::get('/speakers/details/{id}', [SpeakersController::class, 'details'])->name('speakers.details');

// ============================================================================** Profile Route ** ==========================================================================

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// dwonload cv
Route::get('/profile/download/{id}', [ProfileController::class, 'download'])->name('profile.download');

// ============================================================================** Pricing Route ** ==========================================================================
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/pricing/{id}', [PricingController::class, 'pricingDetails'])->name('pricing.details');

// ============================================================================** Polices Route ** ==========================================================================
Route::get('polices', [PolicesController::class, 'index'])->name('polices.index');
// ============================================================================** Features Route ** ==========================================================================
Route::get('features', [FeatureController::class, 'index'])->name('features.index');

// ============================================================================** Courses Route ** ==========================================================================
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/download/{id}', [CourseController::class, 'download'])->name('courses.download');
