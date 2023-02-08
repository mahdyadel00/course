<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\SpeakersController;

Route::prefix(LaravelLocalization::setLocale())
    ->middleware([
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath',
    ])
    ->group(function () {
        Auth::routes();
        Route::get('/', [HomeController::class, 'index'])->name('home');
        // ============================================================================** Login Route ** ==========================================================================
        Route::get('login/show', [LoginController::class, 'login'])->name('login.show');
        Route::post('login/post', [LoginController::class, 'doLogin'])->name('login.do');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout.front');
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
        Route::get('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

        // ============================================================================** Speakers Route ** ==========================================================================

        Route::get('/features', function () {
            return view('frontend.features.index');
        })->name('features');
        Route::get('/course', function () {
            return view('frontend.features.index');
        })->name('course');
        Route::get('/pricing', function () {
            return view('frontend.pricing.index');
        })->name('pricing');
    });
