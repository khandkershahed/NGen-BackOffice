<?php

namespace App\Providers;

use Exception;
use App\Models\Admin;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set default values
        View::share('setting', null);
        View::share('categories', null);
        View::share('admins', null);

        try {
            // Check for table existence and set actual values
            if (Schema::hasTable('settings')) {
                View::share('setting', Setting::first());
            }

            if (Schema::hasTable('categories')) {
                View::share('categories', Category::active()->get());
            }

            if (Schema::hasTable('admins')) {
                View::share('admins', Admin::get());
            }

        } catch (Exception $e) {
            // Log the exception if needed
        }

        Paginator::useBootstrap();
    }
}
