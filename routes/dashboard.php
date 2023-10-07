<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonialsController;

Route::controller(DashboardController::class)->group(function() {
    Route::get('/admin/login', 'login')->middleware(['guest'])->name('dashboard.login');
    Route::get('/admin', 'dashboard')->middleware(['auth', 'verified'])->name('dashboard.index');
    Route::post('/admin/login', 'store')->middleware(['guest'])->name('login');
    Route::post('/wyloguj', 'logout')->middleware(['auth', 'verified'])->name('dashboard.logout');
});

Route::controller(PostsController::class)->group(function(){
    Route::get('/admin/aktualnosci', 'index')->middleware(['auth', 'verified'])->name('posts.index');
    Route::get('/admin/aktualnosci/dodaj', 'create')->middleware(['auth', 'verified'])->name('posts.create');
    Route::post('/admin/aktualnosci/dodaj', 'store')->middleware(['auth', 'verified'])->name('posts.store');
    Route::get('/admin/aktualnosci/{post}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('posts.edit');
    Route::patch('/admin/aktualnosci/{post}/edytuj', 'update')->middleware(['auth', 'verified'])->name('posts.update');
    Route::delete('/admin/aktualnosci/{post}/usun', 'destroy')->middleware(['auth', 'verified'])->name('posts.destroy');
});

