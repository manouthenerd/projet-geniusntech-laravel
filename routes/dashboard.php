<?php

use App\Http\Controllers\dashboard\BlogController;
use App\Livewire\DashboardServices;

Route::get('dashboard', function () {
    return view('dashboard.home');
})->name('dashboard');

Route::get('dashboard/projets-realises', function () {
    return view('dashboard.home');
})->name('dashboard.achievement');

Route::get('dashboard/services', DashboardServices::class)->name('dashboard.services');

Route::get('dashboard/blogs', [BlogController::class, 'index'])->name('dashboard.blogs');

Route::get('dashboard/blogs/create', [BlogController::class, 'create'])->name('dashboard.create-blog');

Route::post('dashboard/blogs', [BlogController::class, 'store'])->name('dashboard.create-blog');

Route::get('dashboard/blogs/{blog}', [BlogController::class, 'show'])->name('dashboard.show-blog');

Route::delete('dashboard/blogs/{blog}', [BlogController::class, 'destroy']);

Route::get('dashboard/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('dashboard.edit-blog');
Route::post('dashboard/blogs/{blog}/edit', [BlogController::class, 'save'])->name('dashboard.save-blog');