<?php


Route::get('dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::get('dashboard/services', function () {
    return view('dashboard.services');
})->name('dashboard.services');

Route::get('dashboard/blogs', function () {
    return view('dashboard.blogs');
})->name('dashboard.blogs');

Route::get('dashboard/notre-equipe', function () {
    return view('dashboard.teams');
})->name('dashboard.team');