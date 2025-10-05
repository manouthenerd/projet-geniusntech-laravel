<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;


use App\Livewire\DashboardServices;
use App\Livewire\DashboardBlogArticles;


Route::get('/', HomeController::class)->name('home');

Route::get('/services', [ServiceController::class, 'index'] )->name('services');

Route::get('/services/{slug}',[ServiceController::class, 'show'] )->name('service.show');

Route::get('/nos-realisations', [AchievementController::class, 'index'])->name('achievements');


Route::get("/blogs", [BlogController::class, 'index'])->name('blogs');
Route::get("/blogs/{blog}", [BlogController::class, 'show'])->name('blogs.show');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::view('/a-propos', 'about')->name('about');

Route::middleware(['auth'])->group(function () {

    Route::redirect('/dashboard', '/dashboard/services');
    
    Route::get('/dashboard/services', DashboardServices::class)->name('dashboard');
    Route::post('/dashboard/services', [ServiceController::class, 'store'])->name('dashboard.services');
    Route::get('/dashboard/services/create', [ServiceController::class, 'create'])->name('dashboard.services.create');
    Route::get('/dashboard/services/{service}', [ServiceController::class, 'show'])->name('dashboard.services.show');
    Route::put('/dashboard/services/{service}', [ServiceController::class, 'update'])->name('dashboard.services.update');
    Route::get('/dashboard/services/{service}/edit', [ServiceController::class, 'edit'])->name('dashboard.services.edit');
    Route::delete('/dashboard/services/{service}', [ServiceController::class, 'destroy'])->name('dashboard.services.delete');

    Route::get('/dashboard/blogs', DashboardBlogArticles::class)->name('dashboard.blogs');

    Route::get('/dashboard/blogs/create', [BlogController::class, 'create'])->name('dashboard.blogs.create');

    Route::post('/dashboard/blogs', [BlogController::class, 'store']);

    Route::get('/dashboard/blogs/{blog}', [BlogController::class, 'show'])->name('dashboard.blogs.show');

    Route::delete('/dashboard/blogs/{blog}', [BlogController::class, 'destroy'])->name("dashboard.blogs.destroy");

    Route::get('/dashboard/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('dashboard.blogs.edit');
    Route::put('/dashboard/blogs/{blog}/edit', [BlogController::class, 'update'])->name('dashboard.blogs.update');
});