<?php

use App\Livewire\Auth\Login;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services/{slug}', function ($slug) {

    return view('service', ['slug' => $slug]);
})->name('service');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', Login::class)->name('login');

Route::view('/a-propos', 'about')->name('about');
Route::view('/notre-equipe', 'our-team')->name('our-team');

require_once "dashboard.php";