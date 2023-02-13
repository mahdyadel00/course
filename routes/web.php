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
        // ============================================================================** Features Route ** ==========================================================================


        Route::get('/course', function () {
            return view('frontend.features.index');
        })->name('course');

    // });
