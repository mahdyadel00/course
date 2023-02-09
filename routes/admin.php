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

        //  Category Route
        //  Route::resource('admin.categories', CategoryController::class);
        Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('admin.categories.delete');



        //Products Route
        Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
        Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');


        //email_subscriptions Route
        Route::get('/email_subscriptions', [SubscriptionsController::class, 'index'])->name('admin.subscriptions.index');

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
        Route::get('/roles/edit/{id}', [RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::post('/roles/update/{id}', [RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('/roles/delete/{id}', [RoleController::class, 'delete'])->name('admin.roles.delete');
    });
});
