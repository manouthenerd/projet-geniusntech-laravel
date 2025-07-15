<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Project;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('global_blog_counter', Blog::count());
            $view->with('global_service_counter', Service::count());
            // $view->with('global_project_counter', Project::count());
        });
    }
}
