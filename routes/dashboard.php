<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;

Route::prefix('admin')->group(function() {

    Route::controller(DashboardController::class)->group(function() {
        Route::get('/login', 'login')->middleware(['guest'])->name('dashboard.login');
        Route::get('/', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard.index');
        Route::post('/login', 'store')->middleware(['guest'])->name('login');
        Route::post('/wyloguj', 'logout')->middleware(['auth', 'verified'])->name('dashboard.logout');
    });

    Route::controller(PostsController::class)->group(function(){
        Route::get('/aktualnosci', 'index')->middleware(['auth', 'verified'])->name('posts.index');
        Route::get('/aktualnosci/dodaj', 'create')->middleware(['auth', 'verified'])->name('posts.create');
        Route::post('/aktualnosci', 'store')->middleware(['auth', 'verified'])->name('posts.store');
        Route::get('/aktualnosci/{post}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('posts.edit');
        Route::patch('/aktualnosci/{post}', 'update')->middleware(['auth', 'verified'])->name('posts.update');
        Route::delete('/aktualnosci/{post}', 'destroy')->middleware(['auth', 'verified'])->name('posts.destroy');
    });

    Route::controller(ProductsController::class)->group(function(){
        Route::get('/produkty', 'index')->middleware(['auth', 'verified'])->name('products.index');
        Route::get('/produkty/dodaj', 'create')->middleware(['auth', 'verified'])->name('products.create');
        Route::post('/produkty', 'store')->middleware(['auth', 'verified'])->name('products.store');
        Route::get('/produkty/{product}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('products.edit');
        Route::patch('/produkty/{product}', 'update')->middleware(['auth', 'verified'])->name('products.update');
        Route::delete('/produkty/{product}', 'destroy')->middleware(['auth', 'verified'])->name('products.destroy');
    });

    Route::controller(ServicesController::class)->group(function() {
        Route::get('/uslugi', 'index')->middleware(['auth', 'verified'])->name('services.index');
        Route::get('/uslugi/dodaj', 'create')->middleware(['auth', 'verified'])->name('services.create');
        Route::post('/uslugi', 'store')->middleware(['auth', 'verified'])->name('services.store');
        Route::get('/uslugi/{service}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('services.edit');
        Route::patch('/uslugi/{service}', 'update')->middleware(['auth', 'verified'])->name('services.update');
        Route::delete('/uslugi/{service}', 'destroy')->middleware(['auth', 'verified'])->name('services.destroy');
    });

    Route::controller(TestimonialsController::class)->group(function(){
        Route::get('/opinie', 'index')->middleware(['auth', 'verified'])->name('testimonials.index');
        Route::get('/opinie/dodaj', 'create')->middleware(['auth', 'verified'])->name('testimonials.create');
        Route::post('/opinie', 'store')->middleware(['auth', 'verified'])->name('testimonials.store');
        Route::get('/opinie/{testimonial}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('testimonials.edit');
        Route::patch('/opinie/{testimonial}', 'update')->middleware(['auth', 'verified'])->name('testimonials.update');
        Route::delete('/opinie/{testimonial}', 'destroy')->middleware(['auth', 'verified'])->name('testimonials.destroy');
    });
});

