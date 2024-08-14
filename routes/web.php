<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(UserController::class)->group(function () {
    Route::get('/admin/uzytkownicy', 'index')->name('users.index');
    Route::get('/admin/uzytkownicy/dodaj', 'create')->name('users.create');
    Route::post('/admin/uzytkownicy/dodaj', 'store')->name('users.store');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('dashboard');
    })->name('dashboard');
});
