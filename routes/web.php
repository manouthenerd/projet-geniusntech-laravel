<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');

Route::get('/services',[ServiceController::class, 'index'] )->name('services');

Route::get('/services/{slug}',[ServiceController::class, 'show'] )->name('service');

Route::get('/nos-realisations', [AchievementController::class, 'index'])->name('achievements');


Route::get("/blogs", [BlogController::class, 'index'])->name('blogs');
Route::get("/blogs/{blog}", [BlogController::class, 'show'])->name('blog');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/login', Login::class)->name('login');

Route::view('/a-propos', 'about')->name('about');

require_once "dashboard.php";