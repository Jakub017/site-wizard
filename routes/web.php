<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/admin/ustawienia', function () {
        return view('profile.show');
    })->name('settings');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/admin/uzytkownicy', 'index')->name('users.index');
        Route::get('/admin/uzytkownicy/dodaj', 'create')->name('users.create');
        Route::get('/admin/uzytkownicy/edytuj/{user}', 'edit')->name('users.edit');
        Route::post('/admin/uzytkownicy/dodaj', 'store')->name('users.store');
        Route::patch('/admin/uzytkownicy/edytuj/{user}', 'update')->name('users.update');
        Route::delete('/admin/uzytkownicy/usun/{user}', 'destroy')->name('users.destroy');
    });
});

