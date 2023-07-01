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


Route::controller(ClientsController::class)->group(function(){
    Route::get('/admin/klienci', 'index')->middleware(['auth', 'verified'])->name('clients.index');
    Route::get('/admin/klienci/dodaj', 'create')->middleware(['auth', 'verified'])->name('clients.create');
    Route::get('/admin/klienci/{client}', 'show')->middleware(['auth', 'verified'])->name('clients.show');
    Route::get('/admin/klienci/{client}/edit', 'edit')->middleware(['auth', 'verified'])->name('clients.edit');
    Route::put('/admin/klienci/{client}', 'update')->middleware(['auth', 'verified'])->name('clients.update');
    Route::post('/admin/klienci/', 'storeFromDashboard')->middleware(['auth', 'verified'])->name('clients.store-dashboard');
    Route::delete('/admin/klienci/{client}', 'destroy')->middleware(['auth', 'verified'])->name('clients.destroy');
});

Route::controller(MessagesController::class)->group(function(){
    Route::get('/admin/wiadomosci', 'index')->middleware(['auth', 'verified'])->name('messages.index');
    Route::post('/admin/wiadomosci/wyslij/whatsapp', 'sendMessage')->middleware(['auth', 'verified'])->name('messages.send');
    Route::post('/admin/wiadomosci/wyslij/email', 'sendMail')->middleware(['auth', 'verified'])->name('mails.send');
});

Route::controller(GroupsController::class)->group(function(){
    Route::get('/admin/grupy', 'index')->middleware(['auth', 'verified'])->name('groups.index');
    Route::get('/admin/grupy/dodaj', 'create')->middleware(['auth', 'verified'])->name('groups.create');
    Route::get('/dashbaord/grupy/{group}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('groups.edit');
    Route::post('/admin/grupy/dodaj', 'store')->middleware(['auth', 'verified'])->name('groups.store');
    Route::put('/admin/grupy/{group}', 'update')->middleware(['auth', 'verified'])->name('groups.update');
    Route::delete('/admin/grupy/{group}', 'destroy')->middleware(['auth', 'verified'])->name('groups.destroy');
});

Route::controller(UsersController::class)->group(function(){
    Route::get('/admin/administratorzy', 'index')->middleware(['auth', 'verified'])->name('users.index');
    Route::get('/admin/administratorzy/dodaj', 'create')->middleware(['auth', 'verified'])->name('users.create');
    Route::get('/admin/administratorzy/{user}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('users.edit');
    Route::patch('/admin/administratorzy/{user}/edytuj', 'update')->middleware(['auth', 'verified'])->name('users.update');
    Route::put('/admin/administratorzy/{user}/edytuj', 'passwordUpdate')->middleware(['auth', 'verified'])->name('users.password.update');
    Route::post('/admin/administratorzy/dodaj', 'store')->middleware(['auth', 'verified'])->name('users.store');
    Route::delete('/admin/administratorzy/usun/{user}', 'destroy')->middleware(['auth', 'verified'])->name('users.destroy');
});

Route::controller(TestimonialsController::class)->group(function(){
    Route::get('/admin/opinie', 'index')->middleware(['auth', 'verified'])->name('testimonials.index');
    Route::get('/admin/opinie/dodaj', 'create')->middleware(['auth', 'verified'])->name('testimonials.create');
    Route::post('/admin/opinie/dodaj', 'store')->middleware(['auth', 'verified'])->name('testimonials.store');
    Route::get('/admin/opinie/{testimonial}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('testimonials.edit');
    Route::put('/admin/opinie/{testimonial}/edytuj', 'update')->middleware(['auth', 'verified'])->name('testimonials.update');
    Route::delete('/admin/opinie/{testimonial}/usun', 'destroy')->middleware(['auth', 'verified'])->name('testimonials.destroy');   
});

Route::controller(PostsController::class)->group(function(){
    Route::get('/admin/blog', 'index')->middleware(['auth', 'verified'])->name('posts.index');
    Route::get('/admin/blog/dodaj', 'create')->middleware(['auth', 'verified'])->name('posts.create');
    Route::post('/admin/blog/dodaj', 'store')->middleware(['auth', 'verified'])->name('posts.store');
    Route::get('/admin/blog/{post}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('posts.edit');
    Route::put('/admin/blog/{post}/edytuj', 'update')->middleware(['auth', 'verified'])->name('posts.update');
    Route::delete('/admin/blog/{post}/usun', 'destroy')->middleware(['auth', 'verified'])->name('posts.destroy');
});

Route::controller(ServicesController::class)->group(function(){
    Route::get('/admin/uslugi', 'index')->middleware(['auth', 'verified'])->name('services.index');
    Route::get('/admin/uslugi/dodaj', 'create')->middleware(['auth', 'verified'])->name('services.create');
    Route::post('/admin/uslugi/dodaj', 'store')->middleware(['auth', 'verified'])->name('services.store');
    Route::get('/admin/uslugi/{service}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('services.edit');
    Route::put('/admin/uslugi/{service}/edytuj', 'update')->middleware(['auth', 'verified'])->name('services.update');
    Route::delete('/admin/uslugi/{service}/usun', 'destroy')->middleware(['auth', 'verified'])->name('services.destroy');
});



Route::controller(ProductsController::class)->group(function(){
    Route::get('/admin/produkty', 'index')->middleware(['auth', 'verified'])->name('products.index');
    Route::get('/admin/produkty/dodaj', 'create')->middleware(['auth', 'verified'])->name('products.create');
    Route::post('/admin/produkty/dodaj', 'store')->middleware(['auth', 'verified'])->name('products.store');
    Route::get('/admin/produkty/{product}/edytuj', 'edit')->middleware(['auth', 'verified'])->name('products.edit');
    Route::put('/admin/produkty/{product}/edytuj', 'update')->middleware(['auth', 'verified'])->name('products.update');
    Route::delete('/admin/produkty/{product}/usun', 'destroy')->middleware(['auth', 'verified'])->name('products.destroy');
});