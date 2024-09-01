<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/admin/ustawienia', function () {
        return view('profile.show');
    })->name('profile.index');

    Route::get('/register', function () {
        return redirect('/login');
    })->name('register');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::controller(AppController::class)->group(function () {
        Route::get('/admin', 'dashboard')->name('dashboard');
        Route::get('/admin/pomoc', 'help')->name('help');
        Route::post('/admin/pomoc', 'send')->name('help.send');
        Route::get('/admin/ustawienia', 'settings')->name('settings');
        Route::post('/admin/ustawienia', 'settingsUpdate')->name('settings.update');
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/uzytkownicy', 'index')->name('users.index');
        Route::get('/admin/uzytkownicy/dodaj', 'create')->name('users.create');
        Route::get('/admin/uzytkownicy/edytuj/{user}', 'edit')->name('users.edit');
        Route::post('/admin/uzytkownicy/dodaj', 'store')->name('users.store');
        Route::patch('/admin/uzytkownicy/edytuj/{user}', 'update')->name('users.update');
        Route::delete('/admin/uzytkownicy/usun/{user}', 'destroy')->name('users.destroy');
    });

    Route::controller(ServiceController::class)->group(function() {
        Route::get('/admin/uslugi', 'index')->name('services.index');
        Route::get('/admin/uslugi/dodaj', 'create')->name('services.create');
        Route::get('/admin/uslugi/edytuj/{service}', 'edit')->name('services.edit');
        Route::post('/admin/uslugi/dodaj', 'store')->name('services.store');
        Route::patch('/admin/uslugi/edytuj/{service}', 'update')->name('services.update');
        Route::delete('/admin/uslugi/usun/{service}', 'destroy')->name('services.destroy');
    });

    Route::controller(CategoryController::class)->group(function() {
        Route::get('/admin/kategorie', 'index')->name('categories.index');
        Route::get('/admin/kategorie/dodaj', 'create')->name('categories.create');
        Route::get('/admin/kategorie/edytuj/{category}', 'edit')->name('categories.edit');
        Route::post('/admin/kategorie/dodaj', 'store')->name('categories.store');
        Route::patch('/admin/kategorie/edytuj/{category}', 'update')->name('categories.update');
        Route::delete('/admin/kategorie/usun/{category}', 'destroy')->name('categories.destroy');
    });

    Route::controller(PostController::class)->group(function() {
        Route::get('/admin/blog', 'index')->name('posts.index');
        Route::get('/admin/blog/dodaj', 'create')->name('posts.create');
        Route::get('/admin/blog/edytuj/{post}', 'edit')->name('posts.edit');
        Route::post('/admin/blog/dodaj', 'store')->name('posts.store');
        Route::patch('/admin/blog/edytuj/{post}', 'update')->name('posts.update');
        Route::delete('/admin/blog/usun/{post}', 'destroy')->name('posts.destroy');
    });

    Route::controller(ProductController::class)->group(function() {
        Route::get('/admin/produkty', 'index')->name('products.index');
        Route::get('/admin/produkty/dodaj', 'create')->name('products.create');
        Route::get('/admin/produkty/edytuj/{product}', 'edit')->name('products.edit');
        Route::post('/admin/produkty/dodaj', 'store')->name('products.store');
        Route::patch('/admin/produkty/edytuj/{product}', 'update')->name('products.update');
        Route::delete('/admin/produkty/usun/{product}', 'destroy')->name('products.destroy');
    });
    
});

