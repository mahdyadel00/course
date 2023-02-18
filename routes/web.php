<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\{
    HomeController,
    ProfileController,
    LoginController,
    RegisterController,
    SpeakersController,
    ContactController,
    PricingController,
    PolicesController,
    FeatureController,
    CourseController,
    DiplomaController,
    InstgramController,
    LinkedinController,
};

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login Route
Route::get('login/show', [LoginController::class, 'login'])->name('login.show');
Route::post('login/post', [LoginController::class, 'doLogin'])->name('login.do');
Route::get('logout', [LoginController::class, 'logout'])->name('logout.front');

// Facebook login Route
Route::get('login/facebook', [LoginController::class, 'providerFacebook'])->name('facebook.login');
Route::get('facebook/callback', [LoginController::class, 'callbackHandelFacebook'])->name('facebook.callback');

// Linkedin login Route
Route::get('login/linkedin', [LinkedinController::class, 'providerLinkedin'])->name('linkedin.login');
Route::any('linkedin/callback', [LinkedinController::class, 'callbackHandelLinkedin'])->name('linkedin.login.callback');

// Google login Route
Route::get('google/login', [LoginController::class, 'Provider'])->name('google.login');
Route::get('google/callback', [LoginController::class, 'callbackHandel'])->name('google.login.callback');

//instgram login
Route::get('instgram/login', [InstgramController::class, 'provider'])->name('instgram.login');
Route::any('instgram/callback', [InstgramController::class, 'callbackHandelInstgram'])->name('instgram.login.callback');

// Register Route
Route::get('register/show', [RegisterController::class, 'register'])->name('register.show');
Route::post('register/post', [RegisterController::class, 'doRegister'])->name('register.do');

// Contact Route
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts/create', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/about-us', [ContactController::class, 'aboutUs'])->name('about_us');

// Speakers Route
Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers.index');
Route::get('/speakers/details/{id}', [SpeakersController::class, 'details'])->name('speakers.details');

// Profile Route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
// Dwonload cv
Route::get('/profile/download/{id}', [ProfileController::class, 'download'])->name('profile.download');

// Pricing Route
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/pricing/{id}', [PricingController::class, 'pricingDetails'])->name('pricing.details');

// Diploma Route
Route::get('/diplomas', [DiplomaController::class, 'index'])->name('diplomas.index');
// Route::get('/diplomas/{id}', [DiplomaController::class, 'pricingDetails'])->name('diplomas.details');

// Polices Route
Route::get('polices', [PolicesController::class, 'index'])->name('polices.index');

// Features Route
Route::get('features', [FeatureController::class, 'index'])->name('features.index');

// Courses Route
Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('courses/download/{id}', [CourseController::class, 'download'])->name('courses.download');
