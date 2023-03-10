<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\{
    HomeController,
    ProfileController,
    AuthController,
    SpeakersController,
    ContactController,
    PricingController,
    PolicesController,
    FeatureController,
    CourseController,
    DiplomaController,
    InstgramController,
    LinkedinController,
    LoginGoogleController,
    FacebookController,
    OrderController,
    RestPasswordController
};

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login Route
Route::get('login/show', [AuthController::class, 'login'])->name('login.show');
Route::post('login/post', [AuthController::class, 'doLogin'])->name('login.do');
Route::get('logout', [AuthController::class, 'logout'])->name('logout.front');

// Reset password.
Route::get('forget-password', [RestPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [RestPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [RestPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [RestPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Route::post('reset/check_code', [RestPasswordController::class, "checkCode"]);
// Route::post('reset/reset_password', [RestPasswordController::class, "resetPassword"]);
Route::post("/logout", [AuthController::class, "logout"]);
// });

// Verify email
Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');
// Facebook login Route
Route::get('login/facebook', [FacebookController::class, 'providerFacebook'])->name('facebook.login');
Route::get('facebook/callback', [FacebookController::class, 'callbackHandelFacebook'])->name('facebook.callback');

// Linkedin login Route
Route::get('login/linkedin', [LinkedinController::class, 'providerLinkedin'])->name('linkedin.login');
Route::any('linkedin/callback', [LinkedinController::class, 'callbackHandelLinkedin'])->name('linkedin.login.callback');

// Google login Route
Route::get('google/login', [LoginGoogleController::class, 'Provider'])->name('google.login');
Route::get('google/callback', [LoginGoogleController::class, 'callbackHandel'])->name('google.login.callback');

//instgram login
Route::get('instgram/login', [InstgramController::class, 'providerInstgram'])->name('instgram.login');
Route::any('instgram/callback', [InstgramController::class, 'callbackHandelInstgram'])->name('instgram.login.callback');

// Register Route
Route::get('register/show', [AuthController::class, 'register'])->name('register.show');
Route::post('register/post', [AuthController::class, 'doRegister'])->name('register.do');

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
Route::post('/profile/change/password', [ProfileController::class, 'changePassword'])->name('profile.change_password');
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

//payment Route
Route::get('orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('callback-service', [OrderController::class, 'callback'])->name('callback.service');
