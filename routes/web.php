<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/nos-realisations', function () {
    return view('achievements');
})->name('achievements');

Route::get('/services/{slug}', function ($slug) {

    return view('service', ['slug' => $slug]);
})->name('service');

Route::get("/blogs", function() {
    return view('blogs');
})->name('blogs');

Route::get("/blogs/{blog}", function() {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', Login::class)->name('login');

Route::view('/a-propos', 'about')->name('about');

require_once "dashboard.php";