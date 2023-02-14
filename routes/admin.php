<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use  App\Http\Controllers\Admin\AdminLoginController;
use  App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\UserController;
use  App\Http\Controllers\Admin\CategoryController;
use  App\Http\Controllers\Admin\ProductController;
use  App\Http\Controllers\Admin\ContactController;
use  App\Http\Controllers\Admin\BannerController;
use  App\Http\Controllers\Admin\SpeakersController;
use  App\Http\Controllers\Admin\SubscriptionsController;
use  App\Http\Controllers\Admin\SettingsController;
use  App\Http\Controllers\Admin\RoleController;
use  App\Http\Controllers\Admin\AuthController;
use  App\Http\Controllers\Admin\PolicesController;
use  App\Http\Controllers\Admin\ServayController;
use  App\Http\Controllers\Admin\PackageFeatureController;
use  App\Http\Controllers\Admin\PricingController;
use  App\Http\Controllers\Admin\FeatureController;
use  App\Http\Controllers\Admin\CourseController;
use  App\Http\Controllers\Admin\SponserController;


Auth::routes(['except' => 'register']);
// Route::name('admin.')->prefix('admin')->group(function () {
Route::prefix('admin')->group(function () {
    Route::get('login-show', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'doLogin'])->name('admin.do.login');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.home');
        //Users Route
        Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/show/{id}', [UserController::class, 'show'])->name('admin.users.show');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('admin.users.delete');
        // dwonload cv
        Route::get('/users/download/{id}', [UserController::class, 'download'])->name('admin.users.download');
        Route::get('logout', [UserController::class, 'logout'])->name('logout');

        //Contacts Route
        Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');

        //Banners Route
        Route::get('/banners', [BannerController::class, 'index'])->name('admin.banners.index');
        Route::get('/banners/create', [BannerController::class, 'create'])->name('admin.banners.create');
        Route::post('/banners/store', [BannerController::class, 'store'])->name('admin.banners.store');
        Route::get('/banners/edit/{id}', [BannerController::class, 'edit'])->name('admin.banners.edit');
        Route::post('/banners/update/{id}', [BannerController::class, 'update'])->name('admin.banners.update');
        Route::delete('/banners/delete/{id}', [BannerController::class, 'delete'])->name('admin.banners.delete');


        //Speakers Route
        Route::get('/speakers', [SpeakersController::class, 'index'])->name('admin.speakers.index');
        Route::get('/speakers/create', [SpeakersController::class, 'create'])->name('admin.speakers.create');
        Route::post('/speakers/store', [SpeakersController::class, 'store'])->name('admin.speakers.store');
        Route::get('/speakers/show/{id}', [SpeakersController::class, 'show'])->name('admin.speakers.show');
        Route::get('/speakers/edit/{id}', [SpeakersController::class, 'edit'])->name('admin.speakers.edit');
        Route::post('/speakers/update/{id}', [SpeakersController::class, 'update'])->name('admin.speakers.update');
        Route::delete('/speakers/delete/{id}', [SpeakersController::class, 'delete'])->name('admin.speakers.delete');



        //Settings Route
        Route::get('/settings/edit', [SettingsController::class, 'edit'])->name('admin.settings.edit');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('admin.settings.update');

        //Auth Route
        Route::get('/auth/edit', [AuthController::class, 'edit'])->name('admin.auth.edit');
        Route::post('/auth/update', [AuthController::class, 'update'])->name('admin.auth.update');
        //Roles Route
        Route::get('/roles', [RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/roles/store', [RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/roles/show/{id}', [RoleController::class, 'show'])->name('admin.roles.show');
        Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('/roles/delete/{id}', [RoleController::class, 'delete'])->name('admin.roles.delete');


        //Sevay Routes
        Route::get('/servay', [ServayController::class, 'index'])->name('admin.servay.index');
        Route::get('/servay/create', [ServayController::class, 'create'])->name('admin.servay.create');
        Route::post('/servay/store', [ServayController::class, 'store'])->name('admin.servay.store');
        Route::get('/servay/show/{id}', [ServayController::class, 'show'])->name('admin.servay.show');
        Route::get('/servay/edit/{id}', [ServayController::class, 'edit'])->name('admin.servay.edit');
        Route::post('/servay/update/{id}', [ServayController::class, 'update'])->name('admin.servay.update');
        Route::delete('/servay/delete/{id}', [ServayController::class, 'delete'])->name('admin.servay.delete');

        //polices Route
        Route::get('/polices', [PolicesController::class, 'index'])->name('admin.polices.index'); //
        Route::post('/polices', [PolicesController::class, 'update'])->name('admin.polices.update'); //


        //PackageFeature Route
        Route::get('/packages_features', [PackageFeatureController::class, 'index'])->name('admin.packages_features.index');
        Route::get('/packages_features/create', [PackageFeatureController::class, 'create'])->name('admin.packages_features.create');
        Route::post('/packages_features/store', [PackageFeatureController::class, 'store'])->name('admin.packages_features.store');
        Route::get('/packages_features/show/{id}', [PackageFeatureController::class, 'show'])->name('admin.packages_features.show');
        Route::get('/packages_features/edit/{id}', [PackageFeatureController::class, 'edit'])->name('admin.packages_features.edit');
        Route::post('/packages_features/update/{id}', [PackageFeatureController::class, 'update'])->name('admin.packages_features.update');
        Route::delete('/packages_features/delete/{id}', [PackageFeatureController::class, 'delete'])->name('admin.packages_features.delete');


        //Pricing Route
        Route::get('/pricing', [PricingController::class, 'index'])->name('admin.pricing.index');
        Route::get('/pricing/create', [PricingController::class, 'create'])->name('admin.pricing.create');
        Route::post('/pricing/store', [PricingController::class, 'store'])->name('admin.pricing.store');
        Route::get('/pricing/show/{id}', [PricingController::class, 'show'])->name('admin.pricing.show');
        Route::get('/pricing/edit/{id}', [PricingController::class, 'edit'])->name('admin.pricing.edit');
        Route::post('/pricing/update/{id}', [PricingController::class, 'update'])->name('admin.pricing.update');
        Route::delete('/pricing/delete/{id}', [PricingController::class, 'delete'])->name('admin.pricing.delete');

        //Sponser Route
        Route::get('/sponsers', [SponserController::class, 'index'])->name('admin.sponsers.index');
        Route::get('/sponsers/create', [SponserController::class, 'create'])->name('admin.sponsers.create');
        Route::post('/sponsers/store', [SponserController::class, 'store'])->name('admin.sponsers.store');
        Route::get('/sponsers/show/{id}', [SponserController::class, 'show'])->name('admin.sponsers.show');
        Route::get('/sponsers/edit/{id}', [SponserController::class, 'edit'])->name('admin.sponsers.edit');
        Route::post('/sponsers/update/{id}', [SponserController::class, 'update'])->name('admin.sponsers.update');
        Route::delete('/sponsers/delete/{id}', [SponserController::class, 'delete'])->name('admin.sponsers.delete');

        //Features Route
        Route::get('/features', [FeatureController::class, 'index'])->name('admin.features.index');
        Route::post('/features', [FeatureController::class, 'update'])->name('admin.features.update');

        //Courses Route
        Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses.index');
        Route::post('/courses', [CourseController::class, 'update'])->name('admin.courses.update');
        Route::get('/courses/download/{id}', [CourseController::class, 'download'])->name('admin.courses.download');






    });
});
