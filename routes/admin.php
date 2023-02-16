<?php

use Illuminate\Support\Facades\{Route, Auth};
use  App\Http\Controllers\Admin\{
    AdminLoginController,
    DashboardController,
    UserController,
    ContactController,
    BannerController,
    SpeakersController,
    SettingsController,
    RoleController,
    AuthController,
    PolicesController,
    ServayController,
    PackageFeatureController,
    PricingController,
    FeatureController,
    CourseController,
    SponserController,
    MarketingController,
};

Auth::routes(['except' => 'register']);
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('login-show', [AdminLoginController::class, 'login'])->name('login');
    Route::post('login', [AdminLoginController::class, 'doLogin'])->name('do.login');

    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');

        // Users Route
        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
        Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('users.delete');

        // Dwonload cv
        Route::get('/users/download/{id}', [UserController::class, 'download'])->name('users.download');
        Route::get('logout', [UserController::class, 'logout'])->name('logout');

        // Marketing Route
        Route::get('/marketings', [MarketingController::class, 'index'])->name('marketings.index');
        Route::get('/marketings/create', [MarketingController::class, 'create'])->name('marketings.create');
        Route::post('/marketings/store', [MarketingController::class, 'store'])->name('marketings.store');
        Route::get('/marketings/show/{id}', [MarketingController::class, 'show'])->name('marketings.show');
        Route::get('/marketings/edit/{id}', [MarketingController::class, 'edit'])->name('marketings.edit');
        Route::post('/marketings/update/{id}', [MarketingController::class, 'update'])->name('marketings.update');
        Route::delete('/marketings/delete/{id}', [MarketingController::class, 'delete'])->name('marketings.delete');

        // Contacts Route
        Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

        // Banners Route
        Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
        Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
        Route::post('/banners/store', [BannerController::class, 'store'])->name('banners.store');
        Route::get('/banners/edit/{id}', [BannerController::class, 'edit'])->name('banners.edit');
        Route::post('/banners/update/{id}', [BannerController::class, 'update'])->name('banners.update');
        Route::delete('/banners/delete/{id}', [BannerController::class, 'delete'])->name('banners.delete');

        // Speakers Route
        Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers.index');
        Route::get('/speakers/create', [SpeakersController::class, 'create'])->name('speakers.create');
        Route::post('/speakers/store', [SpeakersController::class, 'store'])->name('speakers.store');
        Route::get('/speakers/show/{id}', [SpeakersController::class, 'show'])->name('speakers.show');
        Route::get('/speakers/edit/{id}', [SpeakersController::class, 'edit'])->name('speakers.edit');
        Route::post('/speakers/update/{id}', [SpeakersController::class, 'update'])->name('speakers.update');
        Route::delete('/speakers/delete/{id}', [SpeakersController::class, 'delete'])->name('speakers.delete');

        // Settings Route
        Route::get('/settings/edit', [SettingsController::class, 'edit'])->name('settings.edit');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

        // Auth Route
        Route::get('/auth/edit', [AuthController::class, 'edit'])->name('auth.edit');
        Route::post('/auth/update', [AuthController::class, 'update'])->name('auth.update');

        // Roles Route
        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/roles/show/{id}', [RoleController::class, 'show'])->name('roles.show');
        Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/roles/delete/{id}', [RoleController::class, 'delete'])->name('roles.delete');

        //Sevay Routes
        Route::get('/servay', [ServayController::class, 'index'])->name('servay.index');
        Route::get('/servay/create', [ServayController::class, 'create'])->name('servay.create');
        Route::post('/servay/store', [ServayController::class, 'store'])->name('servay.store');
        Route::get('/servay/show/{id}', [ServayController::class, 'show'])->name('servay.show');
        Route::get('/servay/edit/{id}', [ServayController::class, 'edit'])->name('servay.edit');
        Route::post('/servay/update/{id}', [ServayController::class, 'update'])->name('servay.update');
        Route::delete('/servay/delete/{id}', [ServayController::class, 'delete'])->name('servay.delete');

        //polices Route
        Route::get('/polices', [PolicesController::class, 'index'])->name('polices.index'); //
        Route::post('/polices', [PolicesController::class, 'update'])->name('polices.update'); //

        //PackageFeature Route
        Route::get('/packages_features', [PackageFeatureController::class, 'index'])->name('packages_features.index');
        Route::get('/packages_features/create', [PackageFeatureController::class, 'create'])->name('packages_features.create');
        Route::post('/packages_features/store', [PackageFeatureController::class, 'store'])->name('packages_features.store');
        Route::get('/packages_features/show/{id}', [PackageFeatureController::class, 'show'])->name('packages_features.show');
        Route::get('/packages_features/edit/{id}', [PackageFeatureController::class, 'edit'])->name('packages_features.edit');
        Route::post('/packages_features/update/{id}', [PackageFeatureController::class, 'update'])->name('packages_features.update');
        Route::delete('/packages_features/delete/{id}', [PackageFeatureController::class, 'delete'])->name('packages_features.delete');


        //Pricing Route
        Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
        Route::get('/pricing/create', [PricingController::class, 'create'])->name('pricing.create');
        Route::post('/pricing/store', [PricingController::class, 'store'])->name('pricing.store');
        Route::get('/pricing/show/{id}', [PricingController::class, 'show'])->name('pricing.show');
        Route::get('/pricing/edit/{id}', [PricingController::class, 'edit'])->name('pricing.edit');
        Route::post('/pricing/update/{id}', [PricingController::class, 'update'])->name('pricing.update');
        Route::delete('/pricing/delete/{id}', [PricingController::class, 'delete'])->name('pricing.delete');

        //Sponser Route
        Route::get('/sponsers', [SponserController::class, 'index'])->name('sponsers.index');
        Route::get('/sponsers/create', [SponserController::class, 'create'])->name('sponsers.create');
        Route::post('/sponsers/store', [SponserController::class, 'store'])->name('sponsers.store');
        Route::get('/sponsers/show/{id}', [SponserController::class, 'show'])->name('sponsers.show');
        Route::get('/sponsers/edit/{id}', [SponserController::class, 'edit'])->name('sponsers.edit');
        Route::post('/sponsers/update/{id}', [SponserController::class, 'update'])->name('sponsers.update');
        Route::delete('/sponsers/delete/{id}', [SponserController::class, 'delete'])->name('sponsers.delete');

        //Features Route
        Route::get('/features', [FeatureController::class, 'index'])->name('features.index');
        Route::post('/features', [FeatureController::class, 'update'])->name('features.update');

        //Courses Route
        Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
        Route::post('/courses', [CourseController::class, 'update'])->name('courses.update');
        Route::get('/courses/download/{id}', [CourseController::class, 'download'])->name('courses.download');

        //Slider Route
        Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
        Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
        Route::post('/sliders/store', [SliderController::class, 'store'])->name('sliders.store');
        Route::get('/sliders/show/{id}', [SliderController::class, 'show'])->name('sliders.show');
        Route::get('/sliders/edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
        Route::post('/sliders/update/{id}', [SliderController::class, 'update'])->name('sliders.update');
        Route::delete('/sliders/delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete');

    });
});
