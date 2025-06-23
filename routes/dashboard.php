<?php

use App\Livewire\Ui\TextEditor;

Route::get('dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::get('dashboard/projets-realises', function () {
    return view('dashboard.home');
})->name('dashboard.achievement');

Route::get('dashboard/services', function () {
    return view('dashboard.services');
})->name('dashboard.services');

Route::get('dashboard/blogs', function () {
    return view('dashboard.blogs');
})->name('dashboard.blogs');

Route::get("dashboard/blogs/{blog}", function($blog) {
    return view('dashboard.blog');
});