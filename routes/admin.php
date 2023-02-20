<?php

use Illuminate\Support\Facades\{Route, Auth};
use  App\Http\Controllers\Admin\{
    AdminLoginController,
    DashboardController,
    UserController,
    ContactController,
    SpeakersController,
    SettingsController,
    RoleController,
    AuthController,
    PolicesController,
    LucturerController,
    DiplomaController,
    PricingController,
    FeatureController,
    CourseController,
    SponserController,
    MarketingController,
    SliderController,
    CountryController,
    CityController,
    GifitController
};


Auth::routes(['except' => 'register']);
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // Route::get('test', function () {
    //     $routes = collect(Route::getRoutes()->getRoutesByName())
    //     ->keys()
    //     ->map(function ($route) {
    //         $guard = Route::getRoutes()->getRoutesByName()[$route]->getAction()['middleware'] ?? [];
    //         $guard = in_array('auth:admin', $guard, true) ? 'admin' : 'web';
    //         return str_replace(array('admin.', '.'), array('', '_'), $route) . "_$guard";
    //     })
    //     ->filter(function ($route) {
    //         return !in_array(explode("_", $route)[0],
    //             ['sanctum', 'ignition', 'verification', 'chatify', 'pusher', 'do', 'auth',
    //                 'debugbar', 'facebook', 'google', 'password', 'register', 'login', 'logout',
    //                 'two-factor', 'email', 'confirm', 'verification', 'verification-notification',
    //                 'forgot-password', 'reset-password']);
    //     });
    //     dd($routes  );
    // });

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

        // Country Route
        Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
        Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
        Route::post('/countries/store', [CountryController::class, 'store'])->name('countries.store');
        Route::get('/countries/show/{id}', [CountryController::class, 'show'])->name('countries.show');
        Route::get('/countries/edit/{id}', [CountryController::class, 'edit'])->name('countries.edit');
        Route::post('/countries/update/{id}', [CountryController::class, 'update'])->name('countries.update');
        Route::delete('/countries/delete/{id}', [CountryController::class, 'delete'])->name('countries.delete');

        // City Route
        Route::get('/cities', [CityController::class, 'index'])->name('cities.index');
        Route::get('/cities/create', [CityController::class, 'create'])->name('cities.create');
        Route::post('/cities/store', [CityController::class, 'store'])->name('cities.store');
        Route::get('/cities/show/{id}', [CityController::class, 'show'])->name('cities.show');
        Route::get('/cities/edit/{id}', [CityController::class, 'edit'])->name('cities.edit');
        Route::post('/cities/update/{id}', [CityController::class, 'update'])->name('cities.update');
        Route::delete('/cities/delete/{id}', [CityController::class, 'delete'])->name('cities.delete');

        // Speakers Route
        Route::get('/speakers', [SpeakersController::class, 'index'])->name('speakers.index');
        Route::get('/speakers/create', [SpeakersController::class, 'create'])->name('speakers.create');
        Route::post('/speakers/store', [SpeakersController::class, 'store'])->name('speakers.store');
        Route::get('/speakers/show/{id}', [SpeakersController::class, 'show'])->name('speakers.show');
        Route::get('/speakers/edit/{id}', [SpeakersController::class, 'edit'])->name('speakers.edit');
        Route::post('/speakers/update/{id}', [SpeakersController::class, 'update'])->name('speakers.update');
        Route::delete('/speakers/delete/{id}', [SpeakersController::class, 'delete'])->name('speakers.delete');

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

        //Diploma Route
        Route::get('/diplomas', [DiplomaController::class, 'index'])->name('diplomas.index');
        Route::get('/diplomas/create', [DiplomaController::class, 'create'])->name('diplomas.create');
        Route::post('/diplomas/store', [DiplomaController::class, 'store'])->name('diplomas.store');
        Route::get('/diplomas/show/{id}', [DiplomaController::class, 'show'])->name('diplomas.show');
        Route::get('/diplomas/edit/{id}', [DiplomaController::class, 'edit'])->name('diplomas.edit');
        Route::post('/diplomas/update/{id}', [DiplomaController::class, 'update'])->name('diplomas.update');
        Route::delete('/diplomas/delete/{id}', [DiplomaController::class, 'delete'])->name('diplomas.delete');


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

        //Gifit Route
        Route::get('/gifits', [GifitController::class, 'index'])->name('gifits.index');
        Route::post('/gifits/update', [GifitController::class, 'update'])->name('gifits.update');

        //Features Route
        Route::get('/features', [FeatureController::class, 'index'])->name('features.index');
        Route::post('/features', [FeatureController::class, 'update'])->name('features.update');

        //Courses Route
        Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
        Route::post('/courses', [CourseController::class, 'update'])->name('courses.update');
        Route::get('/courses/download/{id}', [CourseController::class, 'download'])->name('courses.download');
        //Settings Route
        Route::get('/settings/edit', [SettingsController::class, 'edit'])->name('settings.edit');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings.update');

        //Auth Route
        Route::get('/auth/edit', [AuthController::class, 'edit'])->name('auth.edit');
        Route::post('/auth/update', [AuthController::class, 'update'])->name('auth.update');
        //Roles Route
        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/roles/store', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/roles/show/{id}', [RoleController::class, 'show'])->name('roles.show');
        Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('roles.update');
        Route::delete('/roles/delete/{id}', [RoleController::class, 'delete'])->name('roles.delete');

        //Sevay Routes
        Route::get('/lucturers', [LucturerController::class, 'index'])->name('lucturers.index');
        Route::get('/lucturers/create', [LucturerController::class, 'create'])->name('lucturers.create');
        Route::post('/lucturers/store', [LucturerController::class, 'store'])->name('lucturers.store');
        Route::get('/lucturers/show/{id}', [LucturerController::class, 'show'])->name('lucturers.show');
        Route::get('/lucturers/edit/{id}', [LucturerController::class, 'edit'])->name('lucturers.edit');
        Route::post('/lucturers/update/{id}', [LucturerController::class, 'update'])->name('lucturers.update');
        Route::delete('/lucturers/delete/{id}', [LucturerController::class, 'delete'])->name('lucturers.delete');

        //Slider Routes
        Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
        Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
        Route::post('/sliders/store', [SliderController::class, 'store'])->name('sliders.store');
        Route::get('/sliders/show/{id}', [SliderController::class, 'show'])->name('sliders.show');
        Route::get('/sliders/edit/{id}', [SliderController::class, 'edit'])->name('sliders.edit');
        Route::post('/sliders/update/{id}', [SliderController::class, 'update'])->name('sliders.update');
        Route::delete('/sliders/delete/{id}', [SliderController::class, 'delete'])->name('sliders.delete');

        //polices Route
        Route::get('/polices', [PolicesController::class, 'index'])->name('polices.index'); //
        Route::post('/polices', [PolicesController::class, 'update'])->name('polices.update'); //

    });
});
