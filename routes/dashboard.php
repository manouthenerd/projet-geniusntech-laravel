<?php

use App\Livewire\DashboardServices;
use Illuminate\Support\Facades\Route;
use App\Livewire\DashboardBlogArticles;
use App\Http\Controllers\dashboard\BlogController;
use App\Http\Controllers\dashboard\ServiceController;

Route::middleware(['auth'])->group(function () {
    
    Route::redirect('dashboard', 'dashboard/services')->name('dashboard');

    Route::get('dashboard/services', DashboardServices::class)->name('dashboard.services');
    Route::post('dashboard/services', [ServiceController::class, 'store'])->name('dashboard.services');
    Route::get('dashboard/services/create', [ServiceController::class, 'create'])->name('dashboard.services.create');
    Route::get('dashboard/services/{service}', [ServiceController::class, 'show'])->name('dashboard.services.show');
    Route::put('dashboard/services/{service}', [ServiceController::class, 'update'])->name('dashboard.services.update');
    Route::get('dashboard/services/{service}/edit', [ServiceController::class, 'edit'])->name('dashboard.services.edit');
    Route::delete('dashboard/services/{service}', [ServiceController::class, 'destroy'])->name('dashboard.services.delete');

    Route::get('dashboard/blogs', DashboardBlogArticles::class)->name('dashboard.blogs');

    Route::get('dashboard/blogs/create', [BlogController::class, 'create'])->name('dashboard.blogs.create');

    Route::post('dashboard/blogs', [BlogController::class, 'store']);

    Route::get('dashboard/blogs/{blog}', [BlogController::class, 'show'])->name('dashboard.blogs.show');

    Route::delete('dashboard/blogs/{blog}', [BlogController::class, 'destroy'])->name("dashboard.blogs.destroy");

    Route::get('dashboard/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('dashboard.blogs.edit');
    Route::put('dashboard/blogs/{blog}/edit', [BlogController::class, 'update'])->name('dashboard.blogs.update');
});